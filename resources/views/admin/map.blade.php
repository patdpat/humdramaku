
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>




    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HUMDRAMA</title>

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

    <link rel="shortcut icon" type="image/png" href="{{asset('images/logo.png')}}">

    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <style>

        body {
            background-size: cover;

            font-family: 'Prompt', sans-serif;
            /*background-color: #373230;*/
            background-image: url("{{asset('images/bg.jpg')}}");
        }

        #test {
            width: 100%;
        }
        #test1 {
            width: 100%;
        }

        .btn-booking {
            background-color: #2b4657;
            border-radius: 5px;

        }

        #booking {
            color: white ;
        }

        .nav-item {
            margin-left: 20px;
        }

        .setMap {
            color: #f2c05e;
            font-size: 40px;
            /*padding: 30px 0px;*/
            border-bottom: 1px solid #851a21;
            margin-bottom: 40px;
        }

        .contentMain {
            padding: 40px 50px;
            background-color: #2b2624;
        }

        #block {
            padding: 25px 25px;
        }


    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<div>


    <nav class="navbar navbar-expand-lg navbar-light  sticky-top" style="min-height: 80px ;background-color: #f2c05e" id="nav">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img style="width: 150px" src="{{asset('images/logo.png')}}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav text-center" style="font-size: 20px">
                    <a class="nav-item nav-link active" href="{{ url('/about') }}">เกี่ยวกับ<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="{{route('index')}}" id="story">เนื้อเรื่องย่อ</a>
                    <a class="nav-item nav-link" href="{{route('ticket')}}">การจำหน่ายบัตร</a>
                    <a class="nav-item nav-link " href="{{route('map')}}">แผนที่</a>
                    <a class="nav-item nav-link" href="{{route('payment')}}">ชำระเงิน</a>
                    <a class="nav-item nav-link" href="{{route('checkStatus')}}">ตรวจสอบสถานะ</a>
                    <a class="nav-item nav-link btn-booking text-center" id="booking" href="{{url('/showtimes')}}">สำรองที่นั่ง</a>
                </div>
            </div>
        </div>

    </nav>

    <div class="container">
        <div class="card contentMain mt-5">
            <div class="setMap" >
                แผนที่การเดินทาง
            </div>
            <div id="block" style="border-radius: 10px ">
                <iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3034.118054595773!2d100.56274765340407!3d13.847291889159486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa0841134b6deda0!2sAgricultural+Museum!5e0!3m2!1sen!2sth!4v1550563580138" width=100% height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
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
