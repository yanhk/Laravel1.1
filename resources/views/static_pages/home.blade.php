@extends('layout.default')
@section('content')
    <div class="jumbotron">
        <h1>HELLO WORD</h1>
        <p class="lead">
            你现在看到的是o(╯□╰)o  lv1.1
        </p>
        <p>
            一切即将开始
        </p>
        <p>
            <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">现在注册</a>
        </p>
    </div>

@stop