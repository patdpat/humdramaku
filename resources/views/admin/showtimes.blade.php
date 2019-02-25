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


        body {
            /*background-image: url("https://images.unsplash.com/photo-1532469342119-c1ac6eb66912?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80");*/
            /*background-size: cover;*/
            /*background-color: #373230;*/
            background-image: url("{{asset('images/bg.jpg')}}");
            font-family: 'Prompt', sans-serif;
            color: white;

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

        #block {
            background-color: #2c4657;
        }

        #card {
            transition: 0.5s;
        }

        #card:hover {
            border-color: #4c110f;
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
                        <a class="nav-item nav-link" href="{{route('map')}}">แผนที่</a>
                        <a class="nav-item nav-link" href="{{route('payment')}}">ชำระเงิน</a>
                        <a class="nav-item nav-link" href="{{route('checkStatus')}}">ตรวจสอบสถานะ</a>
                        <a class="nav-item nav-link btn-booking text-center" id="booking" href="{{url('/showtimes')}}">สำรองที่นั่ง</a>
                    </div>
                </div>
            </div>

        </nav>

        <div class="container mt-5 col-md-8 col-sm-12">
            <h2 class="pb-3" style="border-bottom: #4c110f solid 2px ; color: black ">สำรองที่นั่ง <span style="font-size: 15px">ละคอนมะนุดครั้งที่27 เรื่อง Bless You Bully ตำนานลับ คลับขี้แกล้ง</span></h2>

            <div class="container text-center">
                <div class="mt-4 card pl-2 pt-2 pb-2 pr-2" id="block">เลือกรอบการแสดง</div>
            </div>


            <div class="container mt-2 col-md-10 col-sm-12">
                <div class="card mt-3 pt-5 pl-5 pb-5 pr-5" style="border-radius: 20px ; background-color: #1d2124" id="card">
                    <div class="card pt-3 pb-3 pl-3" style="color: #755b12 ; font-size: 20px ; background-color: #b9becf">
                        Agricultural Museum มหาวิทยาลัยเกษตรศาสตร์ บางเขน
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <img src="{{ asset('images/pre_post.jpg')  }}" style="width: 100% ; transition: 1.0s" id="img" >
                        </div>
                        <div class="col-sm" style="color: white">
                            <div class="mt-5">
                                <div style="border-bottom: saddlebrown solid 1px">
                                    <h3>HUMDRAMA | Bless You Bully</h3>
                                    <p>ละคอนมะนุดครั้งที่27 เรื่อง Bless You Bully ตำนานลับ คลับขี้แกล้ง</p>
                                </div>

                                {!! Form::open(['route' => 'booking', 'method' => 'post']) !!}
                                    <select  name="date" id="dropdownDate" class="form-control mb-3 mt-3">
                                        <option value="" disabled selected>กรุณาเลือกรอบการแสดง</option>
                                        @php
                                            $testarr = [];
                                        @endphp
                                        @foreach($shows as $show)
                                            @php
                                                $date = $show->date->format('d-m-Y');
                                            @endphp
                                            @if (!in_array($date,$testarr))
                                                <option value='{{$date}}'>{{$date}}</option>
                                                @php
                                                array_push($testarr,$date)
                                                @endphp
                                            @endif
                                        @endforeach
                                    </select>
                                    {!! Form::hidden('time', 'Time', ['class' => 'form-control','required'=>'required','id'=>'time']) !!}
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    {{--<button type="submit" class="btn btn-success">จอง</button>--}}
                                {!! Form::close() !!}
                                <div id="timer" class="mt-3">
                                    <div id="show">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>

        $(document).ready(function () {

            $('#dropdownDate').on('change',function () {
                $.ajax({
                    url: '/api/timer',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        'date': $(this).val(),
                        "_token": $('input[name=_token]').val(),
                    }
                }).done(function(response) {
                    var data = JSON.parse(JSON.parse(JSON.stringify(response)));
                    // console.log(data);
                    $('#show').text("");
                    $.each(data.shows, function(key, value) {
                        // write hard code
                        console.log(value)
                        let route = "{{ route('screen') }}"
                        let url = route + '?show=' + value['id']
                        $('#show').append('<a href="'+url+'" class="btn btn-success mr-2">'+value['time']+'</a>')


                    })
                });
            })



        })



    </script>

</body>