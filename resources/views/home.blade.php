@extends('layouts.app')

@section('approve')
    <head>
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">

        <style>
            body {
                font-family: 'Prompt', sans-serif;
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

    <div class="container">
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
    </body>

@endsection

