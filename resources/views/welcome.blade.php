
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <!-- Styles -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
        <style>

            body {
                font-family: 'Prompt', sans-serif;
            }

            #test {
                width: 100%;
            }
            #test1 {
                width: 100%;
            }

            .btn-booking {
                background-color: #00CA4C;
                border-radius: 5px;

            }

            #booking {
                color: white ;
            }

            .nav-item {
                margin-left: 20px;
            }
        </style>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">

    <div>


        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="min-height: 80px" id="nav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Humdramaku</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                    <div class="navbar-nav text-center">
                        <a class="nav-item nav-link active" href="{{ url('/about') }}">เกี่ยวกับ<span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#" id="story">เนื้อเรื่องย่อ</a>
                        <a class="nav-item nav-link" href="#">การจำหน่ายบัตร</a>
                        <a class="nav-item nav-link disabled" href="#">แผนที่</a>
                        <a class="nav-item nav-link disabled" href="#">ชำระเงิน</a>
                        <a class="nav-item nav-link btn-booking text-center" id="booking" href="{{url('/showtimes')}}">สำรองที่นั่ง</a>
                    </div>
                </div>
            </div>

        </nav>
        <div>
            <img id="test" src="https://images.unsplash.com/photo-1549921613-8db30562bad1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
        </div>
        <div>
            <img id="test1" src="https://images.unsplash.com/photo-1549915726-a0361a1f3236?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1342&q=80" alt="">
        </div>
    </div>



    {{--<script>--}}
        {{--$('#test').click(function () {--}}
            {{--$('#nav').fadeIn();--}}
            {{--$('html, body').animate({--}}
                {{--scrollTop: $('#test1').offset().top--}}
            {{--}, 1000);--}}
        {{--})--}}
    {{--</script>--}}

    </body>
</html>
