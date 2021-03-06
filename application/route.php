<?php
use think\Route;


//首页
Route::any('/','index/index/index');

Route::any('','index/index/index');

Route::any('index','index/index/index');
/**
 * 内容路由
 */
Route::group('content',function(){
	//首页
	Route::any('index','index/content/index');
	
});
/**
 * 登录路由
 */
Route::group('user',function(){
	//首页
	Route::any('login','index/user/login');
	
});
/**
 * db路由
 */
Route::group('db',function(){
	//首页
	Route::any('dbindex','index/db/dbindex');
	//删除
	Route::any('dbdelete','index/db/dbdelete');
	//查询（修改）
	Route::any('dbselect','index/db/dbselect');
	//设置新的时间
	Route::any('dbtimeset','index/db/dbtimeset');
	//清空整个db
	Route::any('dbflush','index/db/dbflush');
	
});

/**
 * 命令行
 */
Route::group('command',function(){
	//首页
	Route::any('index','index/command/index');
	
});
