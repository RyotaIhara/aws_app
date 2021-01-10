@extends('layout.app')

@section('title', '種別一覧')

@section('style')
<link rel="stylesheet" href="{{ asset('css/types/index.css') }}">
@endsection

@section('content')
    <h2>種別一覧</h2>
    <table class="table ">
        <thead class="table-primary">
            <tr>
                <th>名称</th>
                <th colspan="2">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>{{$type->name}}</td>
                    <td>
                        <div id="actionBtn">
                            {{-- 編集ボタン --}}
                            <a class="btn btn-primary" href="/types/{{$type->id}}/edit">編集</a>
                        </div>
                        <div id="actionBtn">
                            {{-- 削除ボタン --}}
                            @include('share.delete', ['target' => 'types'])
                        </div>
                    </td>
                </tr>
                <tr>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('script')
    <script type="text/javascript">
        $(function() {
            $("h2#first").css("color", "red")
        });
    </script>
@endsection
