<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{asset('images/logo.png')}}">

    <title>HUMDRAMA</title>


    <style>
        #humdrama{
            font-size: 22px;
            color: #f3c15f;
            transition: 1.0s;

        }

        #humdrama:hover{
            font-size: 30px;
            color: #f3c15f;
            transition: 0.5s;

        }

        #head {
            color: #f2c05e;
        }

        .card {
            transition: 0.5s;
            background-color: #2b2624;
        }

        .card:hover {
            border-color: gray;
        }

        #nameadvisor {
            font-size: 20px;
            transition: 1.0s;
            color: white;
        }

        #nameadvisor:hover {
            font-size: 25px;
            color: white;
        }

        body {
            /*background-image: url("https://images.unsplash.com/photo-1532469342119-c1ac6eb66912?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80");*/
            background-size: cover;
            font-family: 'Prompt', sans-serif;
            background-color: #373230;
        }

        #img:hover{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        #advisor:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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

        <div class="container mt-5 col-md-8 col-sm-12">
            <h2 class="text-center" style="color: white"><span id="head">ละคอนมะนุด</span> คืออะไร ?</h2>
            <div class="card mt-3 pt-5 pl-5 pb-5 pr-5" style="border-radius: 20px" id="card">
                <div class="row">
                    <div class="col-sm">
                        <img src="{{ asset('images/Untitled-2.jpg')  }}" style="width: 100% ; transition: 1.0s" id="img" >
                    </div>
                    <div class="col-sm mt-5" style="color: white">
                        <p style="font-size: 22px">&nbsp;&nbsp;&nbsp;&nbsp;ละคอนมะนุด คือละครเวทีที่จัดทำขึ้นโดยนิสิตสาขาสื่อสารมวลชน ภาควิชานิเทศศาสตร์และสารสนเทศศาสตร์ คณะมนุษยศาสตร์ มหาวิทยาลัยเกษตรศาสตร์(บางเขน) ซึ่งเป็นละครเวทีแห่งแรกของมหาวิทยาลัย ที่มีชื่อว่าละคอนมะนุด เนื่องจาก จะให้สอดคล้องกับชื่อคณะ และมีแนวคิดหลักว่าเป็นละครเวทีที่เข้าใจความเป็นมนุษย์ของเราทุกคน ซึ่งมีชื่อย่อว่า
                            <span id="humdrama">HUMDRAMA</span> มาจาก Humanities Drama โดยได้จัดทำขึ้นติดต่อกันมาถึงครั้งนี้ คือครั้งที่ 26</p>
                    </div>

                </div>
            </div>

            <div class="col-sm mt-5" >
                <h2 class="pb-3 text-center" style="color: #f3c15f">อาจารย์ที่ปรึกษาโครงการละครเวทีคณะมนุษยศาสตร์</h2>
                <div class="card mt-3 pt-3 pl-3 pb-3 pr-3" style="border-radius: 20px">
                    <div>
                        <img src="{{asset('images/messageImage_1550075652898.jpg')}}" style="width: 100%; transition: 1.0s" id="advisor">
                    </div>

                    <div class="mt-3 text-center" id="nameadvisor">
                        <p>ผู้ช่วยศาสตราจารย์.ดร พรทิพย์ เย็นจะบก</p>
                    </div>
                </div>
            </div>

            <div class="col-sm mt-5" style="margin-bottom: 200px">
                <h2 class="pb-3 text-center" style="color: #f3c15f">ประวัติรายชื่อละครเวทีคณะมนุษยศาสตร์</h2>
                <div class="row" style="color: white">
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 1	พ.ศ.2533 ศัตรูของประชาชน</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 2	พ.ศ.2535 ต้นส้มแสนรัก</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 3 พ.ศ.2536 ครอบครัวคงกระพัน</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 4 พ.ศ.2537 ศรัทธาแห่งปรัชญากร</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 5 พ.ศ.2539 ต้องบ้า</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 6 พ.ศ.2540 เจ้านาย</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch" style="width: 100%">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 7 พ.ศ.2541 เดอะ รูมเมท</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center " style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 8 พ.ศ.2542 ปรารถนารักนิรันดร์</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 9 พ.ศ.2543 นิทานนิทรา</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 10 พ.ศ.2544 มรดกอลวน คนอลเวง</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 11 พ.ศ.2545 รักปิด รักเปิด</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 12 พ.ศ.2546 ตามศรัทธา</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 13 พ.ศ.2547 งานเลี้ยง</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 14 พ.ศ.2548 Double Death</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 15 พ.ศ.2550 Mertale : The Legend of blue</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 16 พ.ศ.2551 The Healer คนเพ้อ เมืองเพี้ยน</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 17 พ.ศ.2552 ๒๕๘๗ : กลิ่นอายพระนคร หลากรักหลบซ่อน จะย้อนกลับมาอีกครา</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 18 พ.ศ.2553 นาฏอัครา</p>
                        </div>
                    </div> <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 19 พ.ศ.2554 The Suicide Shop ร้านชำสำหรับคนตาย</p>
                        </div>
                    </div> <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 20 พ.ศ.2555 In the Frame วานนั้น วันนี้</p>
                        </div>
                    </div> <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 21 พ.ศ.2556 บางกระโพ้ง</p>
                        </div>
                    </div> <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 22 พ.ศ.2557 นาครเขษม</p>
                        </div>
                    </div> <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 23 พ.ศ.2558 TOMORROW ขณะนี้ 6 นาฬิกา</p>
                        </div>
                    </div> <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 24 พ.ศ.2559 April Rain เมื่อเมษาคือหน้าฝน</p>
                        </div>
                    </div> <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 25 พ.ศ.2560 One Last Time กาลครั้งหนึ่งเมื่อฉันเห็นเธอ</p>
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-center" style="color: white"><span style="font-size: 20px">© </span>2017 HUMDRAMA All Rights Reserved</p>
        </div>
    </div>




</body>