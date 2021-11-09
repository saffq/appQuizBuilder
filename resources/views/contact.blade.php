<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<head>
    @include('head')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header class="row">
    @include('header')
</header>

<div id="contact" class="container mt-sm-5 my-1" style="background-color: white !important;">
    <h1>Contact Us</h1>

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    {!! Form::open(['route'=>'contact']) !!}

    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        {!! Form::label('Name:') !!}
        {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Name']) !!}
        <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>

    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        {!! Form::label('Email:') !!}
        {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Email']) !!}
        <span class="text-danger">{{ $errors->first('email') }}</span>
    </div>

    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
        {!! Form::label('Message:') !!}
        {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Message']) !!}
        <span class="text-danger">{{ $errors->first('message') }}</span>
    </div>

    <div class="form-group">
        <button class="btn btn-success">Send mail</button>
    </div>

    {!! Form::close() !!}

</div>
<footer class="row" style="bottom: 0 !important; position: fixed">
    @include('footer')
</footer>

</body>
</html>
