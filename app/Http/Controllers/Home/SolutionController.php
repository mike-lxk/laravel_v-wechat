<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SolutionController extends Controller
{
    /**
     * 门店星零售
     */
    public function retail()
    {
        return view('home.solution.retail', ['index' => 2]);
    }


    /**
     * 电商
     */
    public function electronic()
    {
        return view('home.solution.electronic', ['index' => 2]);
    }


    /**
     * 品牌展示
     */
    public function brand()
    {
        return view('home.solution.brand', ['index' => 2]);
    }


    /**
     * 制造行业
     */
    public function manufacture()
    {
        return view('home.solution.manufacture', ['index' => 2]);
    }


    /**
     * 微商
     */
    public function wechat()
    {
        return view('home.solution.wechat', ['index' => 2]);
    }
}
