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
Route::get('hello', 'HelloController@index')
    ->middleware('auth');
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

// ログイン
Route::get('hello/auth', 'HelloController@getAuth');
Route::post('hello/auth', 'HelloController@postAuth');

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

// 5_1
Route::get('jissyu10', 'Jissyu5_1Controller@index');
Route::get('jissyu10/show', 'Jissyu5_1Controller@show');

// 5_2
// 表示
Route::get('jissyu11', 'Jissyu5_2Controller@index');
Route::get('jissyu11/show', 'Jissyu5_2Controller@show');
// 追加
Route::get('jissyu11/add', 'jissyu5_2Controller@add');
Route::post('jissyu11/create', 'Jissyu5_2Controller@create');
// 更新
Route::get('jissyu11/edit', 'Jissyu5_2Controller@edit');
Route::post('jissyu11/update', 'Jissyu5_2Controller@update');
// 削除
Route::get('jissyu11/del', 'Jissyu5_2Controller@del');
Route::post('jissyu11/remove', 'Jissyu5_2Controller@remove');

Route::get('jissyu14', 'Jissyu6_3Controller@index');
Route::post('jissyu14/find', 'Jissyu6_3Controller@find');
Route::get('jissyu14/show', 'Jissyu6_3Controller@show');
Route::get('jissyu14/add', 'Jissyu6_3Controller@add');
Route::post('jissyu14/create', 'Jissyu6_3Controller@create');
Route::get('jissyu14/edit', 'Jissyu6_3Controller@edit');
Route::post('jissyu14/update', 'Jissyu6_3Controller@update');
Route::get('jissyu14/del', 'Jissyu6_3Controller@del');
Route::post('jissyu14/remove', 'Jissyu6_3Controller@remove');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 6_4
Route::get('jissyu15', 'Jissyu6_4Controller@index');
Route::get('jissyu15/add', 'Jissyu6_4Controller@add');
Route::post('jissyu15/create', 'Jissyu6_4Controller@create');

// 6_5
Route::get('jissyu16', 'jissyu6_5Controller@index');
Route::get('jissyu16/show', 'jissyu6_5ontroller@show');



