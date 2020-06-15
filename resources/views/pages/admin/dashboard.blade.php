@extends('layout.admin')
@section('content')

<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content" style="min-height:501px">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Dashboard</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Cancelled Bookings per Month</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body no-padding height-9">
                        <div class="row"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                            <canvas id="bar-chart" width="600" height="300" style="display: block; width: 600px; height: 300px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Monthly Income Report</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body no-padding height-9">
                        <div class="row"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                            <canvas id="myChart" width="600" height="300" style="display: block; width: 600px; height: 300px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Reserved Bookings</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="table-wrap">
                            <div class="table-responsive tblHeightSet">
                                <table class="table display product-overview mb-30" id="support_table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Booking Time</th>
                                        <th>Event</th>
                                        <th>Grand Total</th>
                                        <th>Booking Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($booking as $key => $data)
                                    <tr>

                                        <td>{{$data->booking_id}}</td>
                                        <td>{{$data->booking_time}}</td>
                                        <td>{{$data->message}}</td>
                                        <td>{{$data->grand_total}}</td>
                                        <td>
                                            <span class="label label-sm label-success">{{$data->booking_status}}</span>
                                        </td>
                                    </tr>
                                    @empty

                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Upcoming Events</header>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto;"><ul class="empListWindow small-slimscroll-style" style="overflow: hidden; width: auto;">
                                    @forelse($booking as $key => $data)
                                    <li>
                                        <div class="prog-avatar">
                                            {{$data->checkin_date}}
                                            <img src="assets/img/user/user1.jpg" alt="" width="40" height="40">
                                        </div>
                                        <div class="details">
                                            <div class="title">
                                                <a href="#">{{$data->name}}</a>
                                            </div>
                                            <div>
                                                <span class="clsAvailable">{{$data->payment_status}}</span>
                                            </div>
                                        </div>
                                    </li>
                                    @empty

                                    @endforelse
                                </ul><div class="slimScrollBar" style="background: rgb(158, 165, 171); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 193.202px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                            <div class="full-width text-center p-t-10">
                                <a href="#" class="btn purple btn-outline btn-circle margin-0">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->
@stop

@section('jsfiles')
    <script src="{{ URL::asset('js/admin/plugins/chart-js/Chart.bundle.js') }}"></script>
    <script src="{{ URL::asset('js/admin/plugins/chart-js/utils.js') }}"></script>
    <script src="{{ URL::asset('js/admin/charts.js') }}"></script>
    <script src="{{ URL::asset('js/admin/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ URL::asset('js/admin/chart-design.js') }}"></script>
@stop
