<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <link rel="shortcut icon" type="image/png" href="{{asset('images/logo.png')}}">



    <title>HUMDRAMA</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/override.css')}}">



    <style>


        body {
            /*background-image: url("https://images.unsplash.com/photo-1532469342119-c1ac6eb66912?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80");*/
            /*background-size: cover;*/
            background-color: #373230;
            {{--background-image: url("{{asset('images/bg.jpg')}}");--}}
            font-family: 'rsuregular';
            color: white;
            background-size: cover;

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

        .setmargin {
            /*margin-left: 20px;*/
        }

        #date {
            position: absolute;
            font-size: 20px;
            top: 20px;
            margin-left: 250px;
        }

        #time {
            position: absolute;
            font-size: 20px;
            top: 20px;
            margin-left: 600px;
        }

        #iconAvaliable {
            position: absolute;
            font-size: 20px;
            top: 17px;
            margin-left: 800px;
        }

        #iconNotAvaliable {
            position: absolute;
            font-size: 20px;
            top: 17px;
            margin-left: 1000px;
        }

        .dateTime {
            background-color: black;
            padding: 0px 7px;
            border-radius: 5px;
            color: #a87859;
        }
        .imgSelect {
            cursor: pointer;
        }

        .boxseat {
            width: 70px;
            border: 1px solid red;
            display: inline-block;
            margin-right: 6px;
            border-radius: 6px;
            margin-bottom: 5px;
        }

    </style>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <div>

        <nav class="navbar navbar-expand-lg navbar-light  sticky-top" style="min-height: 80px ;background-color: #351c4b" id="nav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img style="width: 150px" src="{{asset('images/logo.png')}}"></a>
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
        </div>

    </nav>

    <div class="container mt-3 col-md-11" style="width: 1520px">

        <div class="card">
            <h2 class="text-center mt-2" style="color: gray">STAGE</h2>
        </div>

        <div class="text-center col-md-12">
            <img src="{{asset('images/screen.png')}}" style="width: 100% ; background-size: cover ">
            <p id="date">
                รอบการแสดงวันที่ : <span class="dateTime">{{$show->date->format('d-m-Y')}}</span>
            </p>
            <div id="time">
                เวลา : <span class="dateTime">{{$show->time = $show->date->format('H:i')}}</span>
            </div>

            <div id="iconAvaliable">
                <img src="{{asset('images/seat.png')}}" alt=""><span> : AVAILABLE</span>
            </div>

            <div id="iconNotAvaliable">
                <img src="{{asset('images/notavailable.png')}}" alt=""><span> : NOT AVAILABLE</span>
            </div>

        </div>

        <div class="mt-3 setmargin col-md-12" style="cursor: pointer; margin: 0 auto">
            {{--{{ dd($seats) }}--}}
            <table class="mt-2" style="margin: 0px auto">
                @for ($i = 14; $i > 0; $i--)
                    @if ($i==1)
                        @php $text = "A"; @endphp
                    @elseif ($i==2)
                        @php $text = "B"; @endphp
                    @elseif ($i==3)
                        @php $text = "C"; @endphp
                    @elseif ($i==4)
                        @php $text = "D"; @endphp
                    @elseif ($i==5)
                        @php $text = "E"; @endphp
                    @elseif ($i==6)
                        @php $text = "F"; @endphp
                    @elseif ($i==7)
                        @php $text = "G"; @endphp
                    @elseif ($i==8)
                        @php $text = ""; @endphp
                    @elseif ($i==9)
                        @php $text = "H"; @endphp
                    @elseif ($i==10)
                        @php $text = "I"; @endphp
                    @elseif ($i==11)
                        @php $text = "J"; @endphp
                    @elseif ($i==12)
                        @php $text = "K"; @endphp
                    @elseif ($i==13)
                        @php $text = "L"; @endphp
                    @elseif ($i==14)
                        @php $text = "M"; @endphp
                    @else


                    @endif
                        <tr>
                            @php $count=1 @endphp
                            @for ($j = 0; $j < 46 ; $j++)
                                @php $seatnum = $text.$count;  @endphp
                                @if ($j==0)
                                    <td>{{$text}}</td>
                                @elseif ($j==14 || $j==31)
                                    <td id="seatSelect">
                                        <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                    </td>
                                @else

                                     {{--A--}}
                                    @if ($i==1 && $j<=4)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==1 && $j>=15 && $j<=19)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==1 && $j>=29 && $j<=30)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==1 && $j>=41 && $j<=44)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>
                                    @elseif ($i==1 && $j==45)
                                        <td id="seatSelect">{{$text}}</td>



                                              {{--B--}}
                                    @elseif ($i==2 && $j<=3)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==2 && $j>=14 && $j<=19)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==2 && $j==30 )
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==2 && $j>=42 && $j<=44)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==2 && $j==45)
                                        <td id="seatSelect">{{$text}}</td>



                                         {{--C--}}
                                    @elseif ($i==3 && $j<=2)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==3 && $j>=14 && $j<=18)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==3 && $j==30 )
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==3 && $j>=42 && $j<=44)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==3 && $j==45)
                                        <td id="seatSelect">{{$text}}</td>




                                         {{--D--}}
                                    @elseif ($i==4 && $j<=2)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==4 && $j>=14 && $j<=17)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==4 && $j==30 )
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==4 && $j>=43 && $j<=44)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==4 && $j==45)
                                        <td id="seatSelect">{{$text}}</td>





                                         {{--E--}}
                                    @elseif ($i==5 && $j<=1)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==5 && $j>=14 && $j<=17)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==5 && $j==30 )
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==5 && $j==44)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==5 && $j==45)
                                        <td id="seatSelect">{{$text}}</td>





                                         {{--F--}}

                                    @elseif ($i==6 && $j>=14 && $j<=17)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==6 && $j==30 )
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==6 && $j==44)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==6 && $j==45)
                                        <td id="seatSelect">{{$text}}</td>





                                         {{--G--}}

                                    @elseif ($i==7 && $j>=14 && $j<=16)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==7 && $j==30 )
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>
                                    @elseif ($i==7 && $j==45)
                                        <td id="seatSelect">{{$text}}</td>






                                         {{--ทางเดิน--}}

                                    @elseif ($i==8 && $j>=1)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>




                                         {{--H--}}
                                    @elseif ($i==9 && $j<=1)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==9 && $j>=14 && $j<=16)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==9 && $j==30 )
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==9 && $j==44)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==9 && $j==45)
                                        <td id="seatSelect">{{$text}}</td>





                                         {{--I--}}
                                    @elseif ($i==10 && $j<=1)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==10 && $j>=14 && $j<=16)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==10 && $j==30 )
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==10 && $j==44)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==10 && $j==45)
                                        <td id="seatSelect">{{$text}}</td>





                                         {{--J--}}
                                    @elseif ($i==11 && $j<=1)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==11 && $j>=14 && $j<=15)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==11 && $j==30 )
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==11 && $j==44)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==11 && $j==45)
                                        <td id="seatSelect">{{$text}}</td>





                                         {{--K--}}
                                    @elseif ($i==12 && $j<=1)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==12 && $j>=14 && $j<=15)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>


                                    @elseif ($i==12 && $j==44)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==12 && $j==45)
                                        <td id="seatSelect">{{$text}}</td>





                                         {{--L--}}
                                    @elseif ($i==13 && $j<=2)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==13 && $j>=14 && $j<=15)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>


                                    @elseif ($i==13 && $j>=43 && $j<=44)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==13 && $j==45)
                                        <td id="seatSelect">{{$text}}</td>





                                         {{--M--}}
                                    @elseif ($i==14 && $j<=2)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==14 && $j>=14 && $j<=15)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>


                                    @elseif ($i==14 && $j>=43 && $j<=44)
                                        <td id="seatSelect">
                                            <img id="{{$seatnum}}" src="{{asset('images/nullseat.png')}}" alt="">
                                        </td>

                                    @elseif ($i==14 && $j==45)
                                        <td id="seatSelect">{{$text}}</td>

            
                                    @else
                                        @php
                                            $isExpensiveSeat = ($i >= 4 && $i <= 12 && $j >= 13 && $j <= 27);
                                        @endphp
                                        @if (in_array($seatnum,$seats))
                                            <td id="seatSelect">
                                                <img id="{{$seatnum}}" src="{{asset('images/notavailable.png')}}" alt="">
                                            </td>
                                        @else
                                            @if ($isExpensiveSeat)
                                                <td id="seatSelect">
                                                    <img id="{{$seatnum}}" class="imgSelect" src="{{asset('images/seat.png')}}" alt="" data-price="250">
                                                </td>
                                            @else
                                                <td id="seatSelect">
                                                    <img id="{{$seatnum}}" class="imgSelect" src="{{asset('images/seat.png')}}" alt="" data-price="150">
                                                </td>
                                            @endif
                                        @endif
                                            @php $count += 1 @endphp
                                    @endif


                                @endif
                            @endfor
                        </tr>
                @endfor
            </table>
        </div>

    </div>

    <div class="container">
        <div class="card mt-5 col-md-12 col-sm-6" style="color:  black ; padding: 10px 0px">
            <div class="row text-center" style="font-size: 18px">
                <div class="col-sm pt-1">
                    ราคารวม : <span id="totalprice"></span>
                </div>
                <div class="col-sm pt-1">
                    ที่นั่งที่เลือก : <span id="showseat"></span>
                </div>
                <div class="col-sm">
                    {{--<button type="button" id="btnreserve" class="btn btn-success">จอง</button>--}}
                    <!-- Button trigger modal -->
                    <button id="btnreserve" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        จอง
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">กรอกรายละเอียดการจอง</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                {!! Form::open(['route' => ['seat'] , 'method' => 'post']) !!}
                                <input type="hidden" name="show" value="{{request()->query('show')}}">
                                <div class="modal-body">
                                    <input type="hidden" name="getseat" id="blockinput" >
                                    <input type="hidden" name="getPrice" id="getPrice">
                                    <div class="allseat" ></div>
                                    ราคารวม : <span name="price" id="price"></span> บาท
                                    <div>
                                        ชื่อ-สกุล&nbsp;<input name="name" class="mt-4" type="text"style="border-radius: 5px ; text-align: center">
                                    </div>
                                    <div>
                                        Email&nbsp;<input name="email" class="mt-4" type="text" style="border-radius: 5px ; text-align: center">
                                    </div>
                                    <div>
                                        Tel&nbsp;<input name="phone" class="mt-4" type="text" style="border-radius: 5px ; text-align: center">
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                    <button type="submit" class="btn btn-primary">ยืนยัน</button>
                                </div>
                                {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div>

    </div>



</div>

<script>
    $(document).ready(function () {
        console.log('pass');
        var count = 0;
        var price = 0;
        var arr = [];
        $('.imgSelect').on('click tap',function (e) {
            console.log($(this).attr('id'))
            console.log($(this).attr('src'))
            const seatPrice = parseInt(e.target.getAttribute('data-price')) || 150;
            // if (count < 6) {
                if ($(this).attr('src') == '{{asset('images/seat.png')}}') {
                    $(this).attr('src','{{asset("images/reserve.png")}}');
                    arr.push($(this).attr('id'))
                    console.log(arr.length)
                    count += 1;
                    if (arr.length == 1) {
                        $('#showseat').append("<div class='boxseat'>"+arr[0]+"</div>");
                    }
                    else {
                        $('#showseat').text("");
                        $.each(arr , function (key, value) {
                            console.log(key + ": " + value);
                            $('#showseat').append("<div class='boxseat'>"+value+"</div>");
                            // $('#showseat').append(value+' ');
                            // $('#showseat').append("</div>");
                        })
                    }
                    $('#totalprice').text(price+=seatPrice);   // แก้ราคาตอนครบ 300 คน 150 -> 250
                }else{
                    $(this).attr('src','{{asset("images/seat.png")}}');
                    arr.splice($.inArray($(this).attr('id'), arr),1);
                    if (arr.length == 1) {
                        $('#showseat').text("");
                        $('#showseat').append("<div class='boxseat'>"+arr[0]+"</div>");
                        $('#totalprice').text(price-=seatPrice);  // แก้ราคาตอนครบ 300 คน   150 -> 250

                    }
                    else {
                        $('#showseat').text("");
                        $.each(arr , function (key, value) {
                            console.log(key + ": " + value);
                            $('#showseat').append("<div class='boxseat'>"+value+"</div>");
                        })
                        $('#totalprice').text(price-=seatPrice);  // แก้ราคาตอนครบ 300 คน   150 -> 250
                    }

                    count -=1 ;

                }
            // }

        });

        $('#btnreserve').on('click' , function () {
            console.log(arr.length);
            if (arr.length == 1) {
                $('.allseat').append(arr[0]);
                $('#blockinput').val(arr[0]);
                $('#price').text($('#totalprice').text());
                $('#getPrice').val($('#totalprice').text());
            }
            else {
                $('.allseat').text("");
                $.each(arr , function (key, value) {
                    console.log(key + ": " + value);
                    $('.allseat').append(value+' ');

                })
                $('#blockinput').val($('.allseat').text());
                $('#price').text($('#totalprice').text());
                $('#getPrice').val($('#totalprice').text());
            }


        })
    });

</script>
</body>