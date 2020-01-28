<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/override.css')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('images/logo.png')}}">

    <title>HUMDRAMA</title>

    <style>

        body {
            /*background-color: #373230;*/
            font-family: 'rsuregular';
            background-image: url("{{asset('images/bg.jpg')}}");
            background-attachment: fixed;
            background-size: cover;

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

    </style>

</head>


<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <div>

        <nav class="navbar navbar-expand-lg navbar-light  sticky-top" style="min-height: 80px ;background-color: #63308f" id="nav">
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
                        <a class="nav-item nav-link" href="{{route('map')}}">แผนที่</a>
                        <a class="nav-item nav-link" href="{{route('payment')}}">ชำระเงิน</a>
                        <a class="nav-item nav-link" href="{{route('checkStatus')}}">ตรวจสอบสถานะ</a>
                        <a class="nav-item nav-link btn-booking text-center" id="booking" href="{{url('/showtimes')}}">สำรองที่นั่ง</a>
                    </div>
                </div>
            </div>

        </nav>
    </div>

    <div class="container">
        <div style="background: rgba(255, 255, 255, 0.8); padding: 0 2rem;">
            <div class="mt-5" style="color: black;">
            <h1 style="padding: 20px 0px; border-bottom: 2px solid #851a21">Payment</h1>
        </div>
        <div style="font-size: 14px">
        <h3>ขั้นตอนการชำระเงิน</h3>
            <ol>
                <li>กรอก Order id ของท่าน </li>
                <li>แนบสลิปการชำระเงิน</li>
                <li>รอตรวจสอบสถานะการชำระเงิน (ใช้เวลาประมาณ 1-2 วัน)</li>
                <li>ตรวจสอบสถานะได้ที่ <a href="{{route('checkStatus')}}">click</a></li>
            </ol>
        </div>
        </div>
        <div class="card mt-5" style="background-color: #2b2624; border-radius: 20px ; padding: 20px 20px">
            <p class="text-center" style="color: white ; font-size: 23px ; padding: 10px 0px">กรุณากรอกเลข Order id และอัพโหลดหลักฐานการโอนเงินของท่าน
                <br><span style="font-size: 15px">เลข Order id ของท่านจะถูกส่งไปยัง email ของท่าน</span></p>
            <div class=" container row">
                <div class="col-sm text-center">
                    <i style="font-size: 200px ; color: black ; padding: 50px 50px" class="fas fa-hand-holding-usd"></i>

                </div>

                <div class="col-sm mt-5" style="color: white">

                    {!! Form::open(['route' => 'pay', 'method' => 'post' ,'files'=>true] ) !!}
                    <input type="text" class="form-control mt-2" id="orderid" name="orderid" placeholder="Enter a order number." value="{{empty($orderId) ? '':$orderId}}"><br>
                    อัพโหลดรูปหลักฐานการโอนเงินของท่าน

                    <div class="custom-file mt-2">
                        {{--<input type="file" class="custom-file-input" id="customFile" accept="image/*">--}}
                        <input accept="image/*" type="file" class="custom-file-input" name="filepath" id="filepath " data-toggle="tooltip" data-placement="bottom" title="*If file not modified, no need to re-upload.*" onchange="$(this).next().after().text($(this).val().split('\\').slice(-1)[0])">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>

                    @if ($errors->any())
                        <div class="mt-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <button type="submit" class="btn btn-success mt-4" style="width: 100%">Send</button>
                    {!! Form::close() !!}


                </div>
            </div>

        </div>
    </div>
</body>