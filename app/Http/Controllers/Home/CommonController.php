<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CommonController extends Controller
{
    /**
     * 生成短信验证码
     * @param bigint $phone  手机号
     */
    public function getCode(Request $request)
    {
        $mobile_code = $this->random(4);
        session(['mobile_code' => $request->input('phone') . '-' . $mobile_code]);

        // response('')->withCookie('mobile_code1', $request->input('phone') . '-' . $mobile_code, 60);

        return ['code' => 200, 'msg' => '验证码发送成功', 'codes' => $mobile_code];

        // $apiid = config('verify_code.apiid');
        // $apisecret = config('verify_code.apisecret');
        // $target = config('verify_code.target');

        // if (!$phone) {
        //     return ['code'=>201,'msg'=>'参数出错'];
        // } else {
        //     $mobile_code = $this->random(4);
        //     $post_data = "account=" . $apiid . "&password=" . $apisecret . "&mobile=" . $phone . "&content=" . rawurlencode(" 您的验证码是： ".$mobile_code." 。请不要把验证码泄露给其他人。 ");
        //     $gets = $this->xml_to_array($this->post($post_data, $target));

        //     if ($gets['SubmitResult']['code'] == 2) {
        //         // 验证码发送成功
        //         cookie("mobile_code", $phone.'-'.$mobile_code, '1200');
        //         return ['code'=>200,'msg'=> '验证码发送成功'];
        //     } else {
        //         return ['code'=>201,'msg' => $gets['SubmitResult']['msg']];
        //     }
        // }
    }


    /**
     * 验证短信验证码
     */
    public function checkCode(Request $request)
    {
        if (!$request->input('mobile_code')) {
            show_msg(201, '参数出错');
        } else {
            // dump(request()->cookie('mobile_code1'));
            // dump(session('mobile_code'));
            if (session('mobile_code') == "") {
                show_msg(201, '验证码已过期，请重新发送');
            }
            if ($request->input('mobile_code') == session('mobile_code')) {
                // $request->session()->forget('mobile_code');
                show_msg(200);

            } else {
                show_msg(201, '验证失败');                
            }
        }
    }


    /*
     * 请求数据到短信接口，检查环境是否 开启 curl init。
     */
    protected function post($curlPost, $url)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_NOBODY, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
        $return_str = curl_exec($curl);
        curl_close($curl);
        return $return_str;
    }


    /*
     * 将 xml数据转换为数组格式。
     */
    protected function xml_to_array($xml)
    {
        $reg = "/<(\w+)[^>]*>([\\x00-\\xFF]*)<\\/\\1>/";
        if (preg_match_all($reg, $xml, $matches)) {
            $count = count($matches[0]);
            for ($i = 0; $i < $count; $i++) {
                $subxml = $matches[2][$i];
                $key = $matches[1][$i];
                if (preg_match($reg, $subxml)) {
                    $arr[$key] = $this->xml_to_array($subxml);
                } else {
                    $arr[$key] = $subxml;
                }
            }
        }
        return $arr;
    }


    /*
     *random() 函数返回随机整数。
     */
    protected function random($length = 6, $numeric = 0)
    {
        PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
        if ($numeric) {
            $hash = sprintf('%0' . $length . 'd', mt_rand(0, pow(10, $length) - 1));
        } else {
            $hash = '';
            $chars = '0123456789';
            $max = strlen($chars) - 1;
            for ($i = 0; $i < $length; $i++) {
                $hash .= $chars[mt_rand(0, $max)];
            }
        }
        return $hash;
    }

    /**
     * 验证手机号是否已注册
     * @param  bigint  $phone  手机号
     */
    public function checkTel(Request $request)
    {
        if ($request->ajax()) {
            if (DB::table('users')->where('phone', $request->input('phone'))->count()) {
                show_msg(201, '该手机已注册！');
            } else {
                show_msg(200);
            }
        } else {
            show_msg(202, '非法请求');
        }
    }
}
