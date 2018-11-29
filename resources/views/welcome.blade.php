@extends('layouts.app')

@section('cpntent')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Tasklist</h1>
            {!! link_to_route('signup.get', 'Sign Up Now!!', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endsection