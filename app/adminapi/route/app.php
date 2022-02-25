<?php
use think\facade\Route;


/**
 * 资源控制器
 */
Route::resource('goods','Goods');

Route::get('getCaptcha','Login/getCaptcha');

Route::get('login','Login/login');

Route::get('getTypeData','Type/getTypeData');

Route::get('delTypeData','Type/delTypeData');

Route::post('image','File/singleFile');