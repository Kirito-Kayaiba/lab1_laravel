
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@extends('layout.master')
@section('content')

    <ul>

        <li>
            @foreach($data as $user)
            <li>{{$user->name}} - ID: {{$user->id}}</li>
            @endforeach
        </li>
    </ul>
</body>
</html>
@endsection<h1>Đây Là trang chủ</h1>
