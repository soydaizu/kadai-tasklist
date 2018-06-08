@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside>
            <div>
                @if (Auth::check())
                    @include('tasklists.tasklists', ['tasklists' => $tasklists])
                @endif
            </div>
            </aside>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Tasklists</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
                {!! link_to_route('login', 'Log in', null, ['class' => 'btn btn-lg btn-info']) !!}
                
            </div>
        </div>
    @endif
@endsection
