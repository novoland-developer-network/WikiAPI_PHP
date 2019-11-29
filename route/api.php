<?php
/**
 * api.php @ Wiki_PHP
 *
 * Code BY ch4o5
 * 11月. 29日 2019年
 * Powered by PhpStorm
 */

use think\facade\Route;

// 前台API列表
Route::resource('/', 'Index');

// 后台API列表
Route::resource('midend', 'midend/Index');
Route::resource('midend/age', 'midend/Age');