@extends('layout.app')

@section('title', '種別作成')

@section('content')
    <form action="{{ route("types.store") }}" method="post">
        @csrf
        @include('types.form', ['name' => old('name')])
    </form>
@endsection
