@extends('layout.app')

@section('title', 'ユーザー作成')

@section('content')
    <h2>ユーザー作成</h2>
    <div class="toChangePage">
        <a class="btn btn-success" href="/users">ユーザー一覧へ</a>
    </div>
    <form action="{{ route("users.store") }}" method="post">
        @csrf
        @include('users.form', 
            ['name' => old('name'),
            'email' => old('email')]
        )
    </form>
@endsection
