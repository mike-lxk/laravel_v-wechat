<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Agency;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Agency::where('id','<',10)->get();
        return view( 'home.agency.lists',['lists'=>$list, 'index' => 4]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.agency.index', ['index' => 4]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 以ORM形式操作数据库
        $agency = new Agency;
        $agency->name = $request->post('name');
        $agency->phone = $request->post('phone');
        $agency->position = $request->post( 'sheng'). ' ' . $request->post('shi') . ' ' . $request->post('qu');
        $agency->company = $request->post('company');
        $agency->message = $request->post('message');

        // 验证当前手机号是否已提交
        if (Agency::where('phone', $request->post('phone'))->count()) {
            return show_msg(201,'当前手机 号已提交代理申请 ');
        }

        // 添加记录
        if ($agency->save()) {
            return show_msg(200, 'ok');
        } else {
            return show_msg(201, '网络繁忙,请稍后重试');
        }

        /*
            // 以传统的数据库操作数据库
            $data['name'] = $request->post('name');
            $data['phone'] = $request->post('phone');
            $data['position'] = $request->post('sheng') . ' '. $request->post('shi') . ' ' . $request->post('qu');
            $data['company'] = $request->post('company');
            $data['message'] = $request->post('messages');
            if (DB::table('agency')->where('phone',$request->post('phone'))->value('id')) {
                return show_msg(201,'当前手机号已提交代理申请');
            }
            if (DB::table('agency')->insert($data)) {
                return show_msg(200, 'ok');
            } else {
                return show_msg(201, '网络繁忙,请稍后重试');
            }
        */
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    
}
