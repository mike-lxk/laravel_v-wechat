<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/**
 * 前台路由
 */
Route::namespace('Home')->group(function () {
    // 首页
    Route::get('/', 'IndexController@index');
    // 登录、注册、忘记密码
    Route::match(['get', 'post'], 'login', 'LoginController@login');
    Route::match(['get', 'post'], 'register', 'LoginController@register');
    Route::post('forgot', 'LoginController@forgot');

    // 解决方案
    Route::get('solution/retail', 'SolutionController@retail');
    Route::get('solution/electronic', 'SolutionController@electronic');
    Route::get('solution/brand', 'SolutionController@brand');
    Route::get('solution/manufacture', 'SolutionController@manufacture');
    Route::get('solution/wechat', 'SolutionController@wechat');

    // 代理
    Route::resource('agency', 'AgencyController', ['only' => [
        'index', 'store'
    ]]);

    
    // 帮助
    Route::get('help/aboutus', 'HelpController@aboutus');
    Route::resource('help', 'HelpController', ['only' => [
        'index', 'show', 'aboutus'
    ]]);
    
    // 经典案例
    Route::resource('cases', 'CasesController');

    // 公共基础类
    Route::get('common/getcode', 'CommonController@getCode');
    Route::get('common/checkcode', 'CommonController@checkCode');
    Route::get('common/checktel', 'CommonController@checkTel');


});
