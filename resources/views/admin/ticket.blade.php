
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
            font-family: 'Prompt', sans-serif;
            background-color: #373230;
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


        #pay {
            font-size: 23px;
            transition: 1.0s;
        }

        #pay:hover {
            font-size: 30px;
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


    <div class="container-fluid mt-5 ml-5 ">
        <h1 style="border-bottom: 1px solid #851a21;color: white ; padding: 30px 0px">ช่องทางในการจำหน่ายบัตร</h1>
    </div>

    <div class="container-fluid mt-5 row mb-5" style="color: white">
        <div class="mt-3 ml-5 card col-sm" style="background-color: #2b2624; padding: 36px 36px;  height: 60%">
            <p class="text-center" style="font-size: 25px;padding: 20px 20px ; border-bottom: 1px solid black">จองบัตรได้ที่</p>
            <a class="mt-3" style=" font-size: 20px;" href="https://www.humdramaku.com" target="_blank">www.humdramaku.com</a>
            <p class="mt-3" style="font-size: 20px">บูธละคอนมะนุดใต้ศูนย์เรียนรวม 3 (ศร.3)</p>
        </div>

        <div class="mt-3 ml-5 card col-sm" style="background-color: #2b2624; padding: 33px 30px ; height: 50%">
            <p class="text-center" style="font-size: 25px;padding: 20px 20px ; border-bottom: 1px solid black">สอบถามข้อมูลเพิ่มเติมได้ที่</p>
            <a class="mt-3" style=" font-size: 20px;" href="https://www.facebook.com/humdrama.ku" target="_blank">www.facebook.com/humdrama.ku</a>
            <p class="mt-3" style="font-size: 20px">โทร 062 - 373 6005</p>
        </div>


        <div class="mt-3 ml-5 card" style="background-color: #2b2624; padding: 30px 30px">
            <p class="text-center" style="font-size: 35px;padding: 20px 20px ">ช่องทางในการชำระเงิน</p>
            <div class="row">
                <img class="col-sm-4" src="{{asset('images/bkk_bank.jpg')}}" alt="logo bank">

                <div>
                    <p class="mt-3 col-sm" style="font-size: 18px">เลขที่บัญชี : <span id="pay">941-020967-1</span></p>
                    <p class="mt-3 col-sm" style="font-size: 18px">นางสาวพรทิพย์ เย็นจะบก,นางสาวนฤกมล โพธินาม และนางสาวจนิสตา เลิศสนองบุญ</p>

                </div>
            </div>

            <div class="row mt-5">
                <img class="col-sm-4" src="{{asset('images/promptPay.jpg')}}" style="width: 100% ; height: 100%" alt="prompt pay">
                <h3 class="col-sm text-center" style=";margin-top: 15%">หรือ Promptpay</h3>
            </div>


        </div>




    </div>


</div>

</body>

</html>
