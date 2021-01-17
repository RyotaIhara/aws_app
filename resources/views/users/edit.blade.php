@extends('layout.app')

@section('title', 'ユーザー編集')

@section('content')
    <h2>ユーザー編集</h2>
    <div class="toChangePage">
        <a class="btn btn-success" href="/users">ユーザー一覧へ</a>
    </div>
    <form action="{{ route("users.update", $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type='hidden' name='id' value='{{$user->id}}'>
        @include('users.form', 
            ['user_name' => $user->user_name,
            'email' => $user->email]
        )
    </form>
@endsection
