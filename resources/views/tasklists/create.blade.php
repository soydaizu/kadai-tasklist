@extends('layouts.app')

@section('content')

<h1>タスクリスト新規登録ページ</h1>

    {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}
        
        {!! Form::label('status', 'ステータス:') !!}
        <!--{!! Form::text('status') !!}-->
        <!--{{Form::select('status', [' ','To Do', 'Doing', 'Done'])}}-->
        {{Form::select('status', [
        ' ' => ' ',
        'To Do' => 'To Do',
        'Doing' => 'Doing',
        'Done' => 'Done']
        )}}

        {!! Form::label('content', 'タスクリスト:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection
