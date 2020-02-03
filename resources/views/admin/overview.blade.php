<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/override.css')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('images/logo.png')}}">

    <title>HUMDRAMA</title>

    <style>

        body {
            /*background-color: #373230;*/
            background-size: cover;

            font-family: 'rsuregular';
            background-image: url("{{asset('images/bg.jpg')}}");
            background-attachment: fixed;

        }

        .btn-booking {
           background-color: #f3b204;
            border-radius: 5px;

        }

        #booking {
            color: white ;
        }

        .nav-item {
            margin-left: 20px;
        }

        .setStyle {
            padding: 20px 0px;
            background-color: #2b2624;
        }






    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

<div>

    <nav class="navbar navbar-expand-lg navbar-light  sticky-top" style="min-height: 80px ;background-color: #351c4b" id="nav">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/overview') }}"><img style="width: 150px" src="{{asset('images/logo.png')}}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav text-center" style="font-size: 20px">
                        <a class="nav-item nav-link active" href="{{ url('/about') }}" style="color : white">เกี่ยวกับ<span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="{{route('index')}}" id="story"  style="color : white">เนื้อเรื่องย่อ</a>
                        <a class="nav-item nav-link" href="{{route('ticket')}}" style="color : white">การจำหน่ายบัตร</a>
                        <a class="nav-item nav-link" href="{{route('map')}}" style="color : white">แผนที่</a>
                        <a class="nav-item nav-link" href="{{route('payment')}}" style="color : white">ชำระเงิน</a>
                        <a class="nav-item nav-link" href="{{route('checkStatus')}}" style="color : white">ตรวจสอบสถานะ</a>
                        <a class="nav-item nav-link btn-booking text-center" id="booking" href="{{url('/showtimes')}}" style="color :white">สำรองที่นั่ง</a>
                    </div>
            </div>
        </div>

    </nav>
</div>

<div class="container p-3 ">
  <div class="row">
    <div class="col">
      <img class="overview-poster" src="{{asset('images/pre_post.jpg')}}"></img>
    </div>
  </div>
  <div class="row p-3">
    <div class="col-4 overview-section" style="flex-direction: column;">
        <div class="event-date">13 - 15</div>
        <div class="event-month">Mar</div>
    </div>
    <div class="col overview-section">
        Powerful You Are ประลองป่วนรัก พลังป่วนโลก
    </div>
  </div>
  <div class="row px-3 pb-3 shows-wrapper">
    <div class="col shows-section">
      <div class="row p-1">
        <div class="col-2 icon-wrapper">
          <img class="small-icon" src="{{asset('images/calendar.png')}}">
        </div>
        <div class="col">
          <ul style="margin-bottom: 0; padding-left: 0; list-style: none;">
            <li>Fri 13 March 2020 18.00</li>
            <li>Sat 14 March 2020 13.00</li>
            <li>Sat 14 March 2020 18.00</li>
            <li>Sun 15 March 2020 13.00</li>
            <li>Sun 15 March 2020 18.00</li>
          </ul>
        </div>
      </div>
      <div class="row p-1">
        <div class="col-2 icon-wrapper">
          <img class="small-icon" src="{{asset('images/location.png')}}">
        </div>
        <div class="col">
          <span>โรงละครสำนักพิพิธภัณฑ์และวัฒนธรรมการเกษตร</span>
        </div>
      </div>
    </div>
  </div>
</div>

</body>