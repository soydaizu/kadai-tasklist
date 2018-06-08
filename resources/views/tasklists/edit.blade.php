@extends('layouts.app')

@section('content')

@if (Auth::user()->id == $tasklist->user_id)
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <h2>ID: {{ $tasklist->id }} の編集ページ</h2>
            <br>
            {!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {{Form::select('status', [
                    ' ' => ' ',
                    'To Do' => 'To Do',
                    'Doing' => 'Doing',
                    'Done' => 'Done']
                    ,null, ['class'=>'form-control']) }}
                <div class="form-group"> 
                    {!! Form::label('content', 'タスクリスト:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('更新', ['class' => 'btn btn-info']) !!}
            </Form>
        
            {!! Form::close() !!}
        </div>
    </div>
@endif
@endsection
