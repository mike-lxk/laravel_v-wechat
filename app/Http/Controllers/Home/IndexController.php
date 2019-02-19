<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * 首页
     */
    public function index()
    {
        // dump(session('user')); session在当前方法可以打印,跳方法打印不到session
        return view('home.index.index',['index'=>1]);
    }

}
