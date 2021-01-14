@extends('layout.app')

@section('title', 'ストック作成')

@section('content')
    <h2>ストック作成</h2>
    <div class="toChangePage">
        <a class="btn btn-success" href="/stocks">ストック一覧へ</a>
    </div>
    <form action="{{ route("stocks.store") }}" method="post">
        @csrf
        @include('stocks.form', 
            ['amount' => old('amount'),
            'note' => old('note'),
            'users' => $users,
            'types' => $types]
        )
    </form>
@endsection
