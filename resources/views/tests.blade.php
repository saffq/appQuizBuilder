<head>
    @include('head')
    <title>Quiz App - Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        function uncheck() {
            $('input[type=radio]').each(function () {
                this.checked = false;
            });
        }
    </script>
</head>
<body>
<header class="row">
    @include('header')
</header>
<form>
    <div class="form-group">
        @foreach($tests ?? '' as $test)
            <div class="d-block container mt-sm-5 my-1">
                <div class="question ml-sm-5 pl-sm-5 pt-2">
                    <div class="py-2 h5" style="text-align: center"><b>Question:</b> {{$test['question']}} </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault1"
                                   id="flexRadioDefault1{{$test['id']}}">
                            <label class="form-check-label" for="flexRadioDefault1">
                                {{$test['answer_1']}}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2"
                                   id="flexRadioDefault2{{$test['id']}}">
                            <label class="form-check-label" for="flexRadioDefault1">
                                {{$test['answer_2']}}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault3"
                                   id="flexRadioDefault3{{$test['id']}}">
                            <label class="form-check-label" for="flexRadioDefault1">
                                {{$test['answer_3']}}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault4"
                                   id="flexRadioDefault4{{$test['id']}}">
                            <label class="form-check-label" for="flexRadioDefault1">
                                {{$test['answer_4']}}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    @endforeach
</form>
<div class="col-md-12 text-center" style="margin-top: 25px ; margin-bottom: 20px">
    <button onclick="checkAnswers()" class="btn btn-primary btn-lg "
            style="box-shadow: 5px 5px 10px rgba(0,0,0,.4);">Check your
        answers
    </button>
    <button onclick="uncheck()" type="button" class="btn btn-danger btn-lg uncheck"
            style="box-shadow: 5px 5px 10px rgba(0,0,0,.4);margin-left: 50px; margin-top: 25px ; margin-bottom: 20px">
        Clear your answers
    </button>
</div>
</body>
<footer class="row">
    @include('footer')
</footer>
<script>
    $(document).ready(function () {
        $("input[type=checkbox]").click(function (e) {
            if ($(e.currentTarget).closest("div.question").length > 0) {
                disableInputs($(e.currentTarget).closest("div.question")[0]);
            }
        });
    });

    function disableInputs(questionElement) {
        console.log(questionElement);
        if ($(questionElement).data('max-answers') == undefined) {
            return true;
        } else {
            maxAnswers = parseInt($(questionElement).data('max-answers'), 10);
            if ($(questionElement).find(":checked").length >= maxAnswers) {
                $(questionElement).find(":not(:checked)").attr("disabled", true);
            } else {
                $(questionElement).find("input[type=checkbox]").attr("disabled", false);
            }
        }
    }
</script>
