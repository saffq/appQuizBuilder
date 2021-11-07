<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js')}}" defer></script>
</head>
<body>
<div class="container">
<h1>Quiz</h1>
    <table class="table table-hover">
        @foreach($tests as $test)
            <tr>
                <th colspan="2"><h2>{{$test['question']}} Pkt.  {{$test['point']}}</h2></th>
            </tr>

            <tr>
                <td>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    {{$test['answer_1']}}
                </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                 {{$test['answer_2']}}
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                   {{$test['answer_3']}}
                </label>
                </td>
            </tr>
            <tr>

                <td>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                   {{$test['answer_4']}}
                    </label>
                </td>
            </tr>
        @endforeach
    </table>
    <div>
        {!! $tests->links() !!}
    </div>
</div>
<div id="app">
<router-view></router-view>
</div>
</body>
