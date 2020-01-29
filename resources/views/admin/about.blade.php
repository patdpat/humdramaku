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
        #humdrama{
            font-size: 22px;
            color: #f3c15f;
            transition: 1.0s;

        }

        #humdrama:hover{
            font-size: 25px;
            color: #f3c15f;
            transition: 0.5s;

        }

        #head {
            color: white;
        }

        .card {
            transition: 0.5s;
            background-color: #351c4b;
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
            font-size: 23px;
            color: white;
        }

        body {
            /*background-image: url("https://images.unsplash.com/photo-1532469342119-c1ac6eb66912?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80");*/
            background-size: cover;
            font-family: 'rsuregular';
            background-attachment: fixed;
            /*background-color: #373230;*/
            background-image: url("{{asset('images/bg.jpg')}}");
        }

        #img:hover{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        #advisor:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .btn-booking {
            background-color: f3b204;
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
                        <a class="nav-item nav-link btn-booking text-center" id="booking" href="{{url('/showtimes')}}" >สำรองที่นั่ง</a>
                    </div>
                </div>
            </div>

        </nav>

        <div class="container mt-5 col-md-8 col-sm-12">
           
            <div class="card mt-3 pt-5 pl-5 pb-5 pr-5" style="border-radius: 20px;background-color: #351c4b" id="card">
            <h2 class="text-center" style="color: white"><span id="head">ละคอนมะนุด</span> คืออะไร ?</h2>
                <div class="row">
                    <div id="demo" class="carousel slide col-sm col-md-12 col-lg" data-ride="carousel">
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                            <li data-target="#demo" data-slide-to="3"></li>
                            <li data-target="#demo" data-slide-to="4"></li>
                            <li data-target="#demo" data-slide-to="5"></li>
                            <li data-target="#demo" data-slide-to="6"></li>
                            <li data-target="#demo" data-slide-to="7"></li>
                            <li data-target="#demo" data-slide-to="8"></li>
                            <li data-target="#demo" data-slide-to="9"></li>
                        </ul>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('images/1.jpg')}}" style="width: 100%">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/2.jpg')}}" style="width: 100%">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/3.jpg')}}" style="width: 100%">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/4.jpg')}}" style="width: 100%">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/5.jpg')}}" style="width: 100%">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/6.jpg')}}" style="width: 100%">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/7.jpg')}}" style="width: 100%">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/8.jpg')}}" style="width: 100%">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/9.jpeg')}}" style="width: 100%">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/10.jpg')}}" style="width: 100%">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>


                    <div class="col-sm mt-5" style="color: white">
                        <p style="font-size: 22px">&nbsp;&nbsp;&nbsp;&nbsp;“ละคอนมะนุด” คือละครเวทีประจำคณะมนุษยศาสตร์ ภาควิชานิเทศศาสตร์และสารสนเทศศาสตร์ มหาวิทยาลัยเกษตรศาสตร์(บางเขน) มีแนวคิดหลักว่าเป็นละครเวทีที่เข้าใจความเป็นมนุษย์ของเราทุกคน ซึ่งมีชื่อย่อในภาษาอังกฤษว่า
                            <span id="humdrama">HUMDRAMA</span> มาจาก Humanities Drama สร้างสรรค์เป็นละครเวที โดยนำความรู้จากแขนงต่างๆที่ได้ศึกษามาปฏิบัติใช้จริงให้เห็นเป็นรูปธรรมมากยิ่งขึ้น ภายใต้การดูแลของคณาจารย์และศิษย์เก่าที่ชำนาญผ่านกระบวนการหลายๆขั้นตอน ต้องใช้ความร่วมมือกับทุกฝ่าย ทำให้เกิดการเรียนรู้กระบวนการทำงานร่วมกับผู้อื่น ก่อให้เกิดความสามัคคี ซึ่งเป็นพื้นฐานที่ดีให้กับนิสิตในการประยุกต์ใช้สู่สังคมส่วนรวมต่อไป</p>
                    </div>

                </div>
            </div>

            <div class="col-sm mt-5" >
                <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px">
                <h2 class="pb-3 text-center" style="color: white">อาจารย์ที่ปรึกษาโครงการละครเวทีคณะมนุษยศาสตร์</h2>
                <div>
                        <img src="{{asset('images/teacher2.png')}}" style="width: 30%; transition: 1.0s" id="advisor">
                    </div>

                    <div class="mt-3 text-center" id="nameadvisor">
                        <p>อาจารย์ ดร. วราพรรณ อภิศุภโชค</p>
                    </div>
                    <div>
                        <img src="{{asset('images/teacher1.png')}}" style="width: 30%; transition: 1.0s" id="advisor">
                    </div>

                    <div class="mt-3 text-center" id="nameadvisor">
                        <p>อาจารย์ ขจร ฝ้ายเทศ</p>
                    </div>
                    
                    <div>
                        <img src="{{asset('images/teacher3.jpg')}}" style="width: 30%; transition: 1.0s" id="advisor">
                    </div>

                    <div class="mt-3 text-center" id="nameadvisor">
                        <p>อาจารย์ ปิยภัทร คงแสนคำ</p>
                    </div>
                </div>
                </div>
               
                <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px">
                <h2 class="pb-3 text-center" >ประวัติรายชื่อละครเวทีคณะมนุษยศาสตร์</h2>
                    
            </div>

            <div class="col-sm mt-5" style="margin-bottom: 200px">
                
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
                    </div> 
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 25 พ.ศ.2560 One Last Time กาลครั้งหนึ่งเมื่อฉันเห็นเธอ</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 26 พ.ศ.2561 เดอะ ไทม์มิชชัน</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-6 d-flex align-items-stretch">
                        <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px ; width: 100%">
                            <p>ครั้งที่ 27 พ.ศ.2562 Bless You Bully ตำนานลับ คลับขี้แกล้ง</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm mt-5" >
                <div class="card mt-3 pt-3 pl-3 pb-3 pr-3 text-center" style="border-radius: 20px">
                <h2 class="pb-3 text-center" style="color: white">Sponsor</h2>
                <div>
                        <img src="{{asset('images/spon1.png')}}" style="width: 100%; transition: 1.0s" >
                    </div>
        </div>

            <p class="text-center" style="color: white"><span style="font-size: 20px">© </span>2020 HUMDRAMA All Rights Reserved</p>
        </div>
    </div>
    




</body>