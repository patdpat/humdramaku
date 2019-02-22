<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{asset('images/logo.png')}}">

    <title>HUMDRAMA</title>

    <style>

        body {
            background-color: #373230;
            font-family: 'Prompt', sans-serif;
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

    </style>

</head>


<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <div>

        <nav class="navbar navbar-expand-lg navbar-light  sticky-top" style="min-height: 80px ;background-color: #f2c05e" id="nav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('images/logo.png')}}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                    <div class="navbar-nav text-center" style="font-size: 20px">
                        <a class="nav-item nav-link active" href="{{ url('/about') }}">เกี่ยวกับ<span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#" id="story">เนื้อเรื่องย่อ</a>
                        <a class="nav-item nav-link" href="#">การจำหน่ายบัตร</a>
                        <a class="nav-item nav-link disabled" href="#">แผนที่</a>
                        <a class="nav-item nav-link" href="{{route('payment')}}">ชำระเงิน</a>
                        <a class="nav-item nav-link" href="{{route('checkStatus')}}">ตรวจสอบสถานะ</a>
                        <a class="nav-item nav-link btn-booking text-center" id="booking" href="{{url('/showtimes')}}">สำรองที่นั่ง</a>
                    </div>
                </div>
            </div>

        </nav>
    </div>

    <div class="container">
        <div class="mt-5" style="color: white;">
            <h1 style="padding: 20px 0px; border-bottom: 2px solid #851a21">Payment</h1>
        </div>
        <div style="font-size: 14px">
            <p style="color: white">ขั้นตอนการใช้งาน
                <br>- กรอก order id ของท่าน
                <br>- แนบ สลิป หรือ บิล ที่ท่านได้โอนเงิน
                <br>- รอตรวจสอบสถานะการชำระเงิน ( ใช้เวลาประมาณ 1-2 วัน )
                <br>- ตรวจสอบสถานะได้ที่ <a href="{{route('checkStatus')}}"> click </a>
            </p>
        </div>
        <div class="card mt-5" style="background-color: #2b2624; border-radius: 20px ; padding: 20px 20px">
            <p class="text-center" style="color: white ; font-size: 23px ; padding: 10px 0px">กรุณากรอกเลข Order id และอัพโหลดหลักฐานการโอนเงินของท่าน</p>
            <div class=" container row">
                <div class="col-sm text-center">
                    <i style="font-size: 200px ; color: black ; padding: 50px 50px" class="fas fa-hand-holding-usd"></i>

                </div>

                <div class="col-sm mt-5" style="color: white">
                    Order id
                    <input type="text" class="form-control mt-2" id="orderid" placeholder="Enter a order number."><br>
                    อัพโหลดรูปหลักฐานการโอนเงินของท่าน
                    <div class="custom-file mt-2">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>

                    <button type="button" class="btn btn-success mt-4" style="width: 100%">Send</button>

                </div>
            </div>

        </div>
    </div>
</body>