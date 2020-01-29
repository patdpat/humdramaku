
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
            /*background-color: #373230;*/
            background-image: url("{{asset('images/bg.jpg')}}");
            background-attachment: fixed;
            background-size: cover;

        }

        li {
            style = font-size: 50px
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


        #pay {
            font-size: 23px;
            transition: 1.0s;
        }

        #pay:hover {
            font-size: 30px;
        }


        .card {
            transition: 0.5s;
           background-color: 351c4b;
        }

        .card:hover {
            box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
                        <a class="nav-item nav-link btn-booking text-center" id="booking" href="{{url('/showtimes')}}" style="color : 351c4b">สำรองที่นั่ง</a>
                    </div>
                </div>
            </div>

        </nav>


        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px">
        <h1 style="border-bottom: 1px solid #851a21 ; padding: 30px 0px">ช่องทางในการจำหน่ายบัตร</h1>
    </div>

    <div class="container-fluid mt-5 row mb-5" style="color: white">
        <div class="mt-3 ml-5 card col-sm" style="background-color: #2b2624; padding: 36px 36px;  height: 60%">
            <p class="text-center" style="font-size: 25px;padding: 20px 20px ; border-bottom: 1px solid black">วิธีการจองบัตร</p>
            <h3>ซื้อผ่านเว็บไซต์</h3>
            <ol>
                <li>สามารถซื้อได้ที่นี่ <a href="/showtimes">click</a></li>
                <li>กรอกข้อมูลของท่านให้ครบถ้วน </li>
                <li>เช็คอีเมลเพื่อเก็บ Order id ไว้ และนำมารับบัตรเพื่อชมการแสดง <br><strong>หากไม่มี Order id ท่านจะไม่สามารถเข้าชมการแสดงได้</strong></li>
                <li>เมื่อท่านชำระเงินเรียบร้อยแล้ว สามารถยืนยันการชำระเงินได้ที่ <a href="/payment">click</a></li>
                <li>ตรวจสอบสถานะได้ภายใน 1-2 วันหลังจากชำระเงิน <a href="/checkStatus">click</a></li>
            </ol>
            <h3>ซื้อด้วยตนเอง</h3>
            <p>บูธละคอนมะนุด ศูนย์เรียนรวม 1</p>
        </div>

        <div class="mt-3 ml-5 card col-sm" style="background-color: #2b2624; padding: 33px 30px ; height: 50%">
            <p class="text-center" style="font-size: 25px;padding: 20px 20px ; border-bottom: 1px solid black">สอบถามข้อมูลเพิ่มเติมได้ที่</p>
            <a class="mt-3" style=" font-size: 20px;" href="https://www.facebook.com/humdrama.ku" target="_blank">www.facebook.com/humdrama.ku</a>
            <p class="mt-3" style="font-size: 20px">โทร 095-767-3071 (ฟ้า) , 064-224-5451 (เพิร์ธ)</p>
        </div>

    </div>


</div>

</body>

</html>
