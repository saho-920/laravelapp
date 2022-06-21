<html>
<head>
   <title>Jissyu/Index</title>
   <style>
   body {font-size:16pt; color:#999; }
   h1 { font-size:50pt; text-align:right; color:#f6f6f6;
       margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
   </style>
</head>
<body>
    <h1>Blade/Index</h1>
    <ol>
    {{--  foreachは配列のデータを1つずつ$itemに入れる。ループで戻ってきたら次のデータ(mail)を$itemに入れる。  --}}
    @foreach($data as $item)
    {{--  初めてのループですか？  --}}
    @if($loop->first)
    <p>データ一覧</p>
    @endif
    {{--  {$loop->iteration}は現在の繰り返し回数  --}}
    <li>No,{{$loop->iteration}}.{{$item}}</li>
    {{--  最後の繰り返しですか？  --}}
    @if($loop->last)
    <p>ここまで出力</p>
    @endif
    @endforeach
 </body>
</html>

