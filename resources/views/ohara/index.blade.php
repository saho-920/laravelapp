@extends('layouts.parent')

@section('title')
    岡山情報ITクリエイター専門学校
@endsection

@section('header')
    @component('components.header')
        @___(9)____ ('h_contents')
            岡山
        @___(10)____
    @endcomponent
@endsection

@section('content')
@___(11)____
    <ul>
    @each ('___(12)____', [
                    'ITスペシャリストシステム開発コース', 
                    'ITスペシャリストネットワークセキュリティコース', 
                    'IT公務員コース'],
                    'item')
    </ul>
@endsection
