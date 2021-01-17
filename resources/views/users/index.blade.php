@extends('layout.app')

@section('title', 'ユーザー一覧')

@section('style')
<link rel="stylesheet" href="{{ asset('css/users/index.css') }}">
@endsection

@section('content')
    <h2>ユーザー一覧</h2>
    <div class="toChangePage">
        <a class="btn btn-success" href="/users/create">新規作成</a>
    </div>
    <table class="table ">
        <thead class="table-primary">
            <tr>
                <th>名称</th>
                <th colspan="2">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->user_name}}</td>
                    <td>
                        <div id="actionBtn">
                            {{-- 編集ボタン --}}
                            <a class="btn btn-primary" href="/users/{{$user->id}}/edit">編集</a>
                        </div>
                        <div id="actionBtn">
                            {{-- 削除ボタン --}}
                            @include('share.delete', ['target' => 'users', 'data' => $user])
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
