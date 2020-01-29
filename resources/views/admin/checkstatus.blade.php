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

<div class="container mt-5 ">
    <div style="color: black; font-size: 40px ; border-bottom: 3px solid #2c4657">สถานะคำสั่งซื้อ</div>


    <div>
        <p class="pr-5 text-center mt-3" style="color: black">กรุณาใส่เลข Order ID ของท่าน </p>
    </div>


    <div class="container col-md-4">
        <div class="input-group">
            <input type="text" class="form-control" id="orderid" placeholder="Enter a order number.">
            <div class="input-group-append">
                <button class="btn btn-danger" type="button" id="search">search</button>
            </div>
        </div>
    </div>



    <div class="mt-4 card setStyle">
        <div class="row text-center">
            <div class="col " style="color: white">
                <img src="{{asset('images/notpass.png')}}" alt="not pass"> Not pass
            </div>

            <div class="col " style="color: white">
                <img src="{{asset('images/waiting.png')}}" alt="waiting"> Waiting
            </div>

            <div class="col" style="color: white">
                <img src="{{asset('images/pass.png')}}" alt="pass"> Pass
            </div>
        </div>

        <table class="table mt-3 col-md-12 col-sm-6 table-responsive-sm">
            <thead class="thead-dark">
            <tr class="text-center">
                <th>Date</th>
                <th>Time</th>
                <th>Seat</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody class="text-center" id="addtotable" style="color: white">
                <tr>
                    <td colspan="6">No content data</td>
                </tr>
            </tbody>
        </table>


    </div>


</div>


<script>
    $(document).ready(function () {
        $('#search').on('click' , function () {
            $.ajax({
                url: '/api/order',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    'orderid': $('#orderid').val(),
                    "_token": "{{ csrf_token() }}",
                }
            }).done(function (response) {
                var data = JSON.parse(JSON.parse(JSON.stringify(response)));
                var table = $('#addtotable')
                table.text("")
                console.log(data.orders)
                $.each(data.orders, function(key, value) {
                    
                    table.append('<tr>')
                    table.append('<td>'+value['strDate']+'</td>')
                    table.append('<td>'+value['strTime']+'</td>')
                    table.append('<td>'+value['seatnumber']+'</td>')
                    table.append('<td>'+value['name']+'</td>')
                    table.append('<td>'+value['email']+'</td>')
                    let status = value['status']
                    if (status == 2)
                    {
                        table.append('<td><img src="{{asset('images/pass.png')}}"></td>')
                    }
                    else if (status == 1)
                    {
                        table.append('<td><img src="{{asset('images/waiting.png')}}"></td>')
                    }
                    else
                    {
                        table.append('<td><img src="{{asset('images/notpass.png')}}"></td>')
                    }
                    table.append('</tr>')
                })
            })
        })

    })
</script>


</body>