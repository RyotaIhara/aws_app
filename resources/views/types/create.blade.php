@extends('layout.app')

@section('title', '種別作成')

@section('content')
    <h2>種別作成</h2>
    <div class="toChangePage">
        <a class="btn btn-success" href="/types">種別一覧へ</a>
    </div>
    <form action="{{ route("types.store") }}" method="post">
        @csrf
        @include('types.form', ['name' => old('name')])
    </form>
@endsection
