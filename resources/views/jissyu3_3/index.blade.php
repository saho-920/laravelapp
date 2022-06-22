@extends('layouts.jissyu')

@section('title', 'index')

@section('menu_title')
Laravelについて
 @endsection

@section('menu_content')
    <ul>
    <li>特徴</li>
    <li>バージョン</li>
</ul>
 @endsection

@section('content')
   <p>開発元：Taylor Otwell</p>
   <p>初版：2011年6月</p>
<p>プログラミング言語：PHP</p>
<p>対応OS：クロスプラットフォーム</p>
<p>公式サイト：laravel.com</p>
@endsection

@section('footer')
フッター
@endsection


{{--  実習4  --}}
@section('menu_content')
<ul>
    <li>特徴</li>
    <li>バージョン</li>
</ul>
@component('components.menu')
@section('menu_title')
特徴
@endsection

@slot('menu_content')
<p>Laravelは、MVCのWebアプリケーション開発用の無料・オープンソースのPHPで書かれたWebアプリケーションフレームワークである。</p>
@endslot
@endcomponent
@endsection

@section('content')
   <p>開発元：Taylor Otwell</p>
   <p>初版：2011年6月</p>
<p>プログラミング言語：PHP</p>
<p>対応OS：クロスプラットフォーム</p>
<p>公式サイト：laravel.com</p>
@include('components.subview', ['subview_title'=>'バージョン',
'subview_content'=>'2020年3月より最新バージョンは7。PHPは7.2.5以上。'])
@endsection



