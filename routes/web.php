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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});

/*
■課題1
URLとControllerやActionを紐付ける機能を何といいますか？
→Routing

■課題2
あなたが考える、group化をすることのメリットを考えてみてください。
→group化すれば、URlとAction名だけ変えれば良いのでRoutingしやすく、
 誰が見た時でも分かりやすいと思います。

■課題3
Route::get('XXX', 'AAAController@bbb');
　　　　　　↑URL　　↑Controllerの名前　　↑Actionの名前
*/

Route::group(['prefix' => 'admin'], function() {
     Route::get('admin/profile/create', 'ProfileController@add');
     Route::get('admin/profile/edit', 'ProfileController@edit');
});
