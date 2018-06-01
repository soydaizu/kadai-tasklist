@extends('layouts.app')

@section('content')
  
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <h2>タスクリスト新規登録ページ</h2>
            <br>
            {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}
            <Form>
                <div class="form-group">
                    <lavel>ステータス</lavel>
                    <select name="status" class="form-control">
                        <option> </option> 
                        <option>To Do</option>
                        <option>Doing</option>
                        <option>Done</option>
                    </select>
                </div>    
                
                <div class="form-group">
                    <lavel>タスクリスト</lavel>
                    <input name="content" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-info">投稿</button>
            </Form>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

