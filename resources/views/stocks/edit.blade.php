@extends('layout.app')

@section('title', 'ストック編集')

@section('content')
    <h2>ストック編集</h2>
    <div class="toChangePage">
        <a class="btn btn-success" href="/stocks">ストック一覧へ</a>
    </div>
    <form action="{{ route("stocks.update", $stock->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type='hidden' name='id' value='{{$stock->id}}'>
        @include('stocks.form', 
            ['amount' => $stock->amount,
            'note' => $stock->note,
            'users' => $users,
            'types' => $types]
        )
    </form>
@endsection
