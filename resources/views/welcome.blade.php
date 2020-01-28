
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

        <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/override.css')}}">
        <style>

            body {
                font-family: 'rsuregular';
                background-image: url("{{asset('images/bg.jpg')}}");
                background-attachment: fixed;
            background-size: cover;


                /*background-size: cover;*/
            }

            .btn-booking {
                background-color: #f2c05e;
                border-radius: 5px;

            }

            #booking {
                color: white ;
            }

            .nav-item {
                margin-left: 20px;
            }

            .card {
                transition: 0.5s;
                background-color: #2b2624;
            }

            .card:hover {
                border-color: gray;
            }

        </style>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">

    <div>


        <nav class="navbar navbar-expand-lg navbar-light  sticky-top" style="min-height: 80px ;background-color: #63308f" id="nav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/overview') }}"><img style="width: 150px" src="{{asset('images/logo.png')}}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                    <div class="navbar-nav text-center" style="font-size: 20px">
                        <a class="nav-item nav-link active" href="{{ url('/about') }}">เกี่ยวกับ<span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="{{route('index')}}" id="story">เนื้อเรื่องย่อ</a>
                        <a class="nav-item nav-link" href="{{route('ticket')}}">การจำหน่ายบัตร</a>
                        <a class="nav-item nav-link" href="{{route('map')}}">แผนที่</a>
                        <a class="nav-item nav-link" href="{{route('payment')}}">ชำระเงิน</a>
                        <a class="nav-item nav-link" href="{{route('checkStatus')}}">ตรวจสอบสถานะ</a>
                        <a class="nav-item nav-link btn-booking text-center" id="booking" href="{{url('/showtimes')}}">สำรองที่นั่ง</a>
                    </div>
                </div>
            </div>

        </nav>

    </div>

    <div class="container mt-5 col-md-8 col-sm-12">
        <h2 class="text-center" style="font-size: 40px" >เนื้อเรื่องย่อ</h2>
        <p class="text-center" style="font-size: 20px">ละคอนมะนุดครั้งที่28 Powerful You Are ประลองป่วนรัก พลังป่วนโลก</p>
        <div class="card mt-3 pt-5 pl-5 pb-5 pr-5" style="border-radius: 20px" id="card">
            <div class="row">
                <div id="demo" class="carousel slide col-sm col-md-12 col-lg" data-ride="carousel">
                    <ul class="carousel-indicators">
                        {{--<li data-target="#demo" data-slide-to="0" class="active"></li>--}}
                        {{--<li data-target="#demo" data-slide-to="1"></li>--}}
                        {{--<li data-target="#demo" data-slide-to="2"></li>--}}
                        {{--<li data-target="#demo" data-slide-to="3"></li>--}}
                        {{--<li data-target="#demo" data-slide-to="4"></li>--}}
                        {{--<li data-target="#demo" data-slide-to="5"></li>--}}
                        {{--<li data-target="#demo" data-slide-to="6"></li>--}}
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('images/trst.jpg')}}" style="width: 100%">
                        </div>
                        {{--<div class="carousel-item">--}}
                            {{--<img src="{{asset('images/2.jpg')}}" style="width: 100%">--}}
                        {{--</div>--}}
                        {{--<div class="carousel-item">--}}
                            {{--<img src="{{asset('images/3.jpg')}}" style="width: 100%">--}}
                        {{--</div>--}}
                        {{--<div class="carousel-item">--}}
                            {{--<img src="{{asset('images/4.jpg')}}" style="width: 100%">--}}
                        {{--</div>--}}
                        {{--<div class="carousel-item">--}}
                            {{--<img src="{{asset('images/5.jpg')}}" style="width: 100%">--}}
                        {{--</div>--}}
                        {{--<div class="carousel-item">--}}
                            {{--<img src="{{asset('images/6.jpg')}}" style="width: 100%">--}}
                        {{--</div>--}}
                        {{--<div class="carousel-item">--}}
                            {{--<img src="{{asset('images/7.jpg')}}" style="width: 100%">--}}
                        {{--</div>--}}
                    </div>
                    {{--<a class="carousel-control-prev" href="#demo" data-slide="prev">--}}
                        {{--<span class="carousel-control-prev-icon"></span>--}}
                    {{--</a>--}}
                    {{--<a class="carousel-control-next" href="#demo" data-slide="next">--}}
                        {{--<span class="carousel-control-next-icon"></span>--}}
                    {{--</a>--}}
                </div>


                <div class="col-sm mt-5" style="color: white">
                    <p style="font-size: 22px">แท้จริงแล้ว...โลกของเรายังมีผู้มีพลังพิเศษ ที่ถูกเรียกว่า EP หรือ Extraordinary People ปะปนอยู่ และทุก 4 ปี พวกเขาเหล่านี้จะมารวมตัวกัน เพื่อชิงการเป็นหนึ่งในการแข่งขัน ‘ทอม’ นายตำรวจหน่วยพิเศษประจำสังคม EP ได้รับมอบหมายให้มาดูแลความเรียบร้อยภายในงาน แต่กลับต้องประหลาดใจเมื่อพบว่า ‘เอ็มม่า’ แฟนสาวของเขาที่เป็นเพียงคนธรรมดาถูกส่งเข้ามาในการแข่งขันนี้อย่างไม่ชอบมาพากล ทอมจึงต้องสืบหาความจริง และแก้ไขความวุ่นวายต่างๆที่เกิดขึ้น</p>
                </div>

            </div>
        </div>
    </div>

    <p class="text-center mt-3" style="color: white"><span style="font-size: 20px">© </span>2017 HUMDRAMA All Rights Reserved</p>


    {{--<script>--}}
        {{--$('#test').click(function () {--}}
            {{--$('#nav').fadeIn();--}}
            {{--$('html, body').animate({--}}
                {{--scrollTop: $('#test1').offset().top--}}
            {{--}, 1000);--}}
        {{--})--}}
    {{--</script>--}}
    @include('sweetalert::alert')
    </body>

</html>
