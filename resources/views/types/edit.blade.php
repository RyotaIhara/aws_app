@extends('layout.app')

@section('title', '種別編集')

@section('content')
    <h2>種別編集</h2>
    <div class="toChangePage">
        <a class="btn btn-success" href="/types">種別一覧へ</a>
    </div>
    <form action="{{ route("types.update", $type->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type='hidden' name='id' value='{{$type->id}}'>
        @include('types.form', ['name' => $type->name])
    </form>
@endsection
