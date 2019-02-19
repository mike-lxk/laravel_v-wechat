<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelpController extends Controller
{
    /**
     * 帮助中心列表首页
     */
    public function index()
    {
        return view('home.help.index', ['index' => 5]);
    }

    /**
     * 关于我们
     */
    public function aboutus()
    {
        return view('home.help.aboutus', ['index' => 5]);
    }


    /**
     * 详情
     */
    public function show($id)
    {
        //
    }

}
