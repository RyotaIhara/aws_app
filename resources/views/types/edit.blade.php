@extends('layout.app')

@section('title', '種別編集')

@section('content')
    <form action="{{ route("types.update", $type->id) }}" method="post">
        <table>
            @csrf
            @method('PUT')
            <input type='hidden' name='id' value='{{$type->id}}'>
            <tr>
                <th>name: </th>
                <td><input type='text' name='name' value="{{$type->name}}"></td>
            </tr>
            <tr>
                <th>送信: </th>
                <td><input type='submit' value="送信"></td>
            </tr>
        </table>
    </form>
@endsection
