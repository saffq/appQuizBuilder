<!doctype html>
<html>
<head>
    @include('head')
    <title>Quiz App - Home</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .score {
            font-size: 40pt;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
    </style>
</head>
<body>
<header class="row">
    @include('header')
</header>
<div class="container" style="width: 500px; height: 50%; margin-top: 100px;text-align: center">
<h1>Your score:</h1>
<div class="score">
{{$scoreArray['points']}}  / {{$scoreArray['total']}} Points
</div>
</div>
<footer class="row" style="bottom: 0 !important; position: fixed">
    @include('footer')
</footer>
</body>
</html>
