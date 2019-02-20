<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AgencyController extends Controller
{
    /**
     * 展示代理首页
     */
    public function index()
    {
        return view('home.agency.index', ['index' => 4]);
    }

    /**
     * 添加代理
     */
    public function store(Request $request)
    {
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
    }

    
}
