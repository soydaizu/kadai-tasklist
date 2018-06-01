@extends('layouts.app')

@section('content')

<h2>ID: {{ $tasklist->id }} の詳細ページ</h2>
<br>
    <table class="table table-striped">
        <tr>
            <th>id</th>
            <td>{{ $tasklist->id }}</td>
        </tr>
        <tr>
            <th>タスクリスト</th>
            <td>{{ $tasklist->content }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $tasklist->status }}</td>
        </tr>
    </table>
    <form class="form-inline">
        {!! link_to_route('tasklists.edit', 'このメッセージを編集', ['id' => $tasklist->id], ['class' => 'btn btn-info']) !!}
        {!! Form::model($tasklist, ['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </form>
    


@endsection
