@extends('layouts2.parent')

@section('title')
    岡山情報ITクリエイター専門学校
@endsection

@section('header')
    @component('components2.header')
        @slot ('h_contents')
            岡山
        @endslot
    @endcomponent
@endsection

@section('content')
@parent
    <ul>
    @each ('components2.items', [
                    'ITスペシャリストシステム開発コース', 
                    'ITスペシャリストネットワークセキュリティコース', 
                    'IT公務員コース'],
                    'item')
    </ul>
@endsection
