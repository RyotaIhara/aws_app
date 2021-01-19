@extends('layout.app')

@section('title', 'ユーザー一覧')

@section('style')
@endsection

@section('content')
    <h2>ストック一覧</h2>
    <div class="toChangePage">
        <a class="btn btn-success" href="/stocks/create">新規作成</a>
    </div>
    <table class="table ">
        <thead class="table-primary">
            <tr>
                <th>ユーザー</th>
                <th>種別</th>
                <th>金額</th>
                <th>備考</th>
                <th colspan="2">操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stocks as $stock)
                <tr>
                    <td>{{$stock->user->user_name}}</td>
                    <td>{{$stock->type->type_name}}</td>
                    <td>{{$stock->amount}}</td>
                    <td>{{$stock->note}}</td>
                    <td>
                        <div id="actionBtn">
                            {{-- 編集ボタン --}}
                            <a class="btn btn-primary" href="/stocks/{{$stock->id}}/edit">編集</a>
                        </div>
                        <div id="actionBtn">
                            {{-- 削除ボタン --}}
                            @include('share.delete', ['target' => 'stocks', 'data' => $stock])
                        </div>
                    </td>
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
