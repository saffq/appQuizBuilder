<!doctype html>
<html>
<head>
    @include('head')
    <title>Quiz App - Home</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
<header class="row">
    @include('header')
</header>
<div class="container" style="height: 100%; width: 800px; margin-top: 100px">

    <div id="main" class="row" style="text-align: center; margin-top:30px">
        <h1>Welcome on Quiz App</h1>
           <h2>Select your quiz</h2>
        @foreach($welcome ?? '' as $exams)
           <button type="button" class="btn btn-secondary" onclick="location.href='{{$exams['link']}}';" style="margin-top: 20px; height: 80px;    box-shadow: 5px 5px 10px rgba(0,0,0,.6);"> {{$exams['desc']}}</button>
        @endforeach
</div>
</div>
<footer class="row">
    @include('footer')
</footer>
</body>
</html>
