<?php
use think\facade\Route;

Route::get('show','StudentController/getList');

Route::get('getForm','StudentController/getForm');

Route::post('addData','StudentController/addData');

Route::get('del','StudentController/del');