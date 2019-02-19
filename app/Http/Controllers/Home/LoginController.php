<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    /**
     * 登录
     */
    public function login(Request $request)
    {
        // 判断是否为ajax请求
        if ($request->ajax()) {
            $data = $request->post();
            $status = DB::table('users')->where(['phone' => $data['phone'], 'password' => get_md5_sha1($data['password'])])->value('status');
        
            if ($status) {
                if ($status == 1) {
                    session(['user' => $data['phone']]);
                    show_msg(200, '登录成功');
                } else {
                    show_msg(201, '用户已被禁用');
                }
            } else {
                show_msg(201, '登录失败');                
            }
        } else {
            return view('home.login.login');
        }
    }


    /**
     * 注册
     */
    public function register(Request $request)
    {
        if ($request->ajax()) {
            // $data = $request->post();
            $res['create_time'] = date('Y-m-d H:i:s');
            $res['phone'] = $request->input('phone');
            $res['password'] = get_md5_sha1($request->input(['password']));

            // 添加数据库
            if (DB::table('users')->insert($res)) {
                session(['user'=> $res['phone']]);
                show_msg(200, '注册成功');
            } else {
                show_msg(201, '注册失败');                
            }
        } else {
            return view('home.login.register');
        }
    }


    /**
     * 忘记密码
     */
    public function forgot(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->input('post.');
            dd($data);
            // 验证手机号
            // $status = Db::name('users')->where('phone', $data['phone'])->value('status');
            // if ($status) {
            //     if ($status == 1) {
            //         // 表单后台验证
            //         $check = $this->validate($data, 'User.pwd');
            //         if ($check !== true) {
            //             return json(['code' => 201, 'msg' => $check]);
            //         }

            //         // 更新数据库
            //         if (Db::name('users')->where('phone', $data['phone'])->setField(['password' => get_md5_sha1($data['password'])]) !== false) {
            //             return ['code' => 200, 'msg' => 'ok'];
            //         } else {
            //             return ['code' => 201, 'msg' => '设置失败'];
            //         }
            //     } else {
            //         return ['code' => 201, 'msg' => '当前账户已被禁用'];
            //     }
            // } else {
            //     return ['code' => 201, 'msg' => '当前用户不存在'];
            // }
        }
    }

}
