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

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');


// ------実習用-------
Route::get('jissyu', 'JissyuController@index');

Route::get('jissyu2', 'jissyu3_2Controller@index');
Route::post('jissyu2', 'jissyu3_2Controller@post');
// 問題3，4
Route::get('jissyu3_3', 'jissyu3_3Controller@index');
// 問題５
Route::get('jissyu3_2', 'Chapter3_2Controller@index');
// 岡山情報
Route::get('ohara','OharaController@index');

// テスト
Route::get('kouka1_1', 'Kouka1_1Controller@index');

Route::get('kouka1_2', 'Kouka1_2Controller@index');
Route::post('kouka1_2', 'Kouka1_2Controller@post');
