<!DOCTYPE html>
<html>
<head>
    <!-- Scripts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Quiz</title>
</head>
<body>

<div class="container mt-sm-5 my-1">
    @foreach($tests as $test)
        <h3>
            Quiz nazwa
        </h3>
        <div class="question ml-sm-5 pl-sm-5 pt-2">
            <div class="py-2 h5"><b>Question:</b> {{$test['question']}}</div>
            <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options"><label class="options"> {{$test['answer_1']}}
                    <input type="radio" name="radio"> <span class="checkmark"></span> </label> <label
                    class="options">  {{$test['answer_2']}} <input type="radio" name="radio"> <span
                        class="checkmark"></span> </label> <label class="options"> {{$test['answer_3']}}
                    <input type="radio"
                           name="radio">
                    <span class="checkmark"></span> </label> <label class="options">  {{$test['answer_4']}} <input
                        type="radio" name="radio">
                    <span class="checkmark"></span> </label></div>
        </div>
        <div id="pagination">
            {!! $tests->links() !!}

        </div>
</div>
@endforeach
</body>
