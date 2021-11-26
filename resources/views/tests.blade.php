<head>
    @include('head')
    <title>Quiz App - Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<header class="row">
    @include('header')
</header>
<form action="{{url('/score')}}" method="post" onsubmit="return validate()">
    @csrf
    <div class="checkbox-group required">
        @foreach($tests ?? '' as $test)
            <div class="d-block container mt-sm-5 my-1">
                <div class="question ml-sm-5 pl-sm-5 pt-2">
                    <div class="py-2 h5" style="text-align: center"><b>Question:</b> {{$test['question']}}  </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer[{{$test['id']}}]" required
                                   id="flexRadioDefault" value="1" >
                            <label class="form-check-label" for="flexRadioDefault">
                                {{$test['answer_1']}}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer[{{$test['id']}}]"
                                   id="flexRadioDefault" value="2">
                            <label class="form-check-label" for="flexRadioDefault">
                                {{$test['answer_2']}}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer[{{$test['id']}}]"
                                   id="flexRadioDefault" value="3">
                            <label class="form-check-label" for="flexRadioDefault">
                                {{$test['answer_3']}}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer[{{$test['id']}}]"
                                   id="flexRadioDefault" value="4">
                            <label class="form-check-label" for="flexRadioDefault">
                                {{$test['answer_4']}}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    @endforeach

<div class="col-md-12 text-center" style="margin-top: 25px ; margin-bottom: 20px">
    <input type="submit" class="btn btn-primary btn-lg"
            style="box-shadow: 5px 5px 10px rgba(0,0,0,.4);" />
</div>
</form>
</body>
<footer class="row">
    @include('footer')
</footer>


