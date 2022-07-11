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
// Route::get('hello',function () {
//     return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
//  });


//  Route::get('hello/{msg?}',function ($msg='no messsage.') {

//     $html = <<<EOF
//     <html>
//     <head>
//     <title>Hello</title>
//     <style>
//     body {font-size:16pt; color:#999; }
//     h1 { font-size:100pt; text-align:right; color:#eee;
//        margin:-40px 0px -50px 0px; }
//     </style>
//     </head>
//     <body>
//        <h1>Hello</h1>
//        <p>{$msg}</p>
//        <p>これは、サンプルで作ったページです。</p>
//     </body>
//     </html>
//     EOF;
    
//        return $html;
//     });

// Route::get('hello', 'HelloController@index');
// Route::get('hello/other', 'HelloController@other');

// Route::get('hello', 'HelloController@index');

// Route::get('hello', 'HelloController@index');
// Route::post('hello', 'HelloController@post');

// use App\Http\Middleware\HelloMiddleware;
// Route::get('hello', 'HelloController@index')
//    ->middleware(HelloMiddleware::class);

// トップページの表示
Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

// データの挿入
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

// データの更新
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

// データの削除
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

Route::get('hello/show', 'HelloController@show');

// personクラス　
Route::get('person', 'PersonController@index');
 
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');

// 追加
Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');

// 更新
Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');

// 削除
Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');

// Board
Route::get('board', 'BoardController@index');

Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');

// REST 
Route::resource('rest', 'RestappController');

Route::get('hello/rest', 'HelloController@rest');

Route::get('hello/session', 'HelloController@ses_get');
Route::post('hello/session', 'HelloController@ses_put');

// ------実習用-------
Route::get('jissyu', 'JissyuController@index');

Route::get('jissyu2', 'jissyu3_2Controller@index');
Route::post('jissyu2', 'jissyu3_2Controller@post');
Route::get('jissyu3_3', 'jissyu3_3Controller@index');
// 問題５
Route::get('jissyu3_2', 'Chapter3_2Controller@index');
// 岡山情報
Route::get('ohara','OharaController@index');
