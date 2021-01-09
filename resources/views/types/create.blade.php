@extends('layout.app')

@section('title', '種別作成')

@section('content')
    <form action="{{ route("types.store") }}" method="post">
        <table>
            @csrf
            <tr>
                <th>name: </th>
                <td><input type='text' name='name' value="{{old('name')}}"></td>
            </tr>
            <tr>
                <th>送信: </th>
                <td><input type='submit' value="送信"></td>
            </tr>
        </table>
    </form>
@endsection
