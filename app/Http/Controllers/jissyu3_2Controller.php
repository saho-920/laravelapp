<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jissyu3_2Controller extends Controller
{
    public function index()
    {
        $data = [
            'msg'=>'必要事項を記入してください。',
        ];
        return view('jissyu3_2.input', $data);
    }

    public function post(Request $request)
    {
        $data = [
            'name'=>$request->name,
            'mail'=>$request->mail,
            'age'=>$request->age
        ];
        return view('jissyu3_2.output', ['data'=>$data]);
        // $dataは普通の配列。outputに渡すためには連想配列で送らないといけない。
        // $data自体は連想配列。ビューと対応させないといけない。
    }


}
