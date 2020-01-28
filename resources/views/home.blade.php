@extends('layouts.app')

@section('approve')
    <head>
        <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/override.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

        <style>
            body {
                font-family: 'rsuregular';
            }
        </style>
    </head>
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">Dashboard</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

    <body>
    <div class="container">
        <h1 style="border-bottom: 1px solid #851a21; padding: 20px 0px">Approve order id</h1>
    </div>

    {!! Form::open(['route' => 'changeStatus', 'method' => 'post']) !!}
    <div class="container">
        <table class="table mt-3 col-md-12 col-sm-6 table-responsive-sm">
            <thead class="thead-dark">
            <tr class="">
                <th>Order ID #</th>
                <th>Show</th>
                <th>Seat</th>
                <th>Name</th>
                <th>Email</th>
                <th>Total_Price</th>
                <th>Payment</th>
            </tr>
            </thead>
            <tbody class="" id="addtotable" style="color: black">
            @foreach($shows as $data)
                @php
                    $seats = \App\Seat::where('orderid',$data->orderid)->get();
                    $show = \App\Show::find($seats->first()->show_id)

                @endphp
                <tr>
                    <td class="text-center">{{$data->orderid}}</td>
                    <td class="text-center">{{\Carbon\Carbon::parse($show->date)->format("d D m Y H:i")}}</td>
                    <td>
                        @foreach ($seats as $seat)
                            {{$seat->seatnumber}}
                        @endforeach
                    </td>
                    <td>{{$seat->name}}</td>
                    <td>{{$seat->email}}</td>
                    <td>{{$seat->total_price}}</td>
                    <td>
                        @if ($seat->path != null)
                            <a href="{{url('files/payment/'.$seat->path)}}" target="_blank">link</a>
                        @endif
                    </td>
                    <td><button id="Decided-{{$data->orderid}}" type="submit" class="btn btn-danger clickData" data-dismiss="modal">ยกเลิก</button></td>
                    <td><button id="Accept-{{$data->orderid}}" type="submit" class="btn btn-success clickData" data-dismiss="modal">ยืนยัน</button></td>

                </tr>
            @endforeach


                <input type="hidden" name="orderid" id="orderid">


            </tbody>
        </table>
    </div>
    {!! Form::close() !!}

    <script>

        $(document).ready(function () {
            $('.clickData').on('click' , function () {
                console.log($(this).attr('id'))
                $('#orderid').val($(this).attr('id'));
            })
        })

    </script>



    </body>

@endsection

