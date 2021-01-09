@extends('layout.app')

@section('title', '種別一覧')

@section('content')
    <table>
        <tr><th>Data</th></tr>
        @foreach ($types as $item)
            <tr>
                <td>{{$item->getData()}}</td>
                <td>
                    {{-- 削除ボタン --}}
                    <form action="{{route('types.destroy', $item->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="削除" class="btn btn-danger" onclick='return confirm("削除しますか？");'>
                    </form>
                </td>
            </tr>
            <tr>
                
            </tr>
        @endforeach
    </table>
@endsection
