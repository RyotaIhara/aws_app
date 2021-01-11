@extends('layout.app')

@section('title', 'ログイン')

@section('content')
    <h2>ログイン</h2>
    <p>{{$message}}</p>
    <a class="btn btn-success" href="/logout">ログアウト</a>
    <form action="/login" method="post">
        @csrf
        <div class="form-group">
            <label for="name">ユーザー名</label>
            <input type="text" name='name' class="form-control" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" name='password' class="form-control">
        </div>

        <input type='submit' value="送信" class="btn btn-primary">
    </form>  
@endsection
