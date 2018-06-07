@extends('layouts.app')

@section('content')
    @include('tasklists.tasklists', ['tasklists' => $tasklists])
@endsection