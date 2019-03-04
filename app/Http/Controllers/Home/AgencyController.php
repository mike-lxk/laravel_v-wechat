<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $agency->position = $request->post('sheng'). ' ' . $request->post('shi') . ' ' . $request->post('qu');
        $agency->company = $request->post('company');
        $agency->message = $request->post('messages');

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
    }
    
}
