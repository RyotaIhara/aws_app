@extends('layout.app')

@section('title', '種別編集')

@section('content')
    <form action="{{ route("types.update", $type->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type='hidden' name='id' value='{{$type->id}}'>
        @include('types.form', ['name' => $type->name])
    </form>
@endsection
