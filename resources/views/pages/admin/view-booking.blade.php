@extends('layout.admin')

@section('cssfiles')
    <link href="{{ URL::asset('/js/admin/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}" rel="
          stylesheet" type="text/css" />
@stop

@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">All Bookings</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                               href="index.html">Home</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="">Booking</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">All Bookings</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>All Bookings</header>
                            <div class="tools">
                                <a class="fa fa-repeat btn-color box-refresh" href="javascript:"></a>
                                <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:"></a>
                                <a class="t-close btn-color fa fa-times" href="javascript:"></a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row p-b-20">
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="btn-group">
                                        <a href="add" id="addRow" class="btn btn-info">
                                            Add New <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="btn-group pull-right">
                                        <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                           data-toggle="dropdown">Tools
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:">
                                                    <i class="fa fa-print"></i> Print </a>
                                            </li>
                                            <li>
                                                <a href="javascript:">
                                                    <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                            </li>
                                            <li>
                                                <a href="javascript:">
                                                    <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="table-scrollable">
                                <table class="table table-hover table-checkable order-column full-width"
                                       id="example4">
                                    <thead>
                                    <tr>
                                        <th class="center"> Code</th>
                                        <th class="center"> Booking Date</th>
                                        <th class="center"> Name of Reservee</th>
                                        <th class="center"> Total Guest</th>
                                        <th class="center"> Payment Status</th>
                                        <th class="center"> Reserved Date</th>
                                        <th class="center"> Booking Time</th>
                                        <th class="center"> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($booking as $key => $data)
                                        <tr class="odd gradeX">
                                            <td class="center"> {{$data->booking_code}}</td>
                                            <td class="center">{{$data->booking_date}}</td>
                                            <td class="center">{{$data->name}}</td>
                                            <td class="center">{{$data->total_guest}}</td>
                                            <td class="center">
                                            @if ($data->booking_status === 'booked' || $data->booking_status === 'confirmed')
                                                <span class="label label-sm label-warning">Unpaid</span>
                                            @elseif ($data->booking_status === 'payment sent')
                                                <span class="label label-sm label-danger confirm-payment" data-id="{{ $data->booking_id }}">Confirm Payment</span>
                                            @elseif ($data->booking_status === 'reserved')
                                                <span class="label label-sm label-success">Reserved</span>
                                            @else
                                                <span class="label label-sm label-warning">Cancelled</span>
                                            @endif
                                            </td>
                                            <td class="center">{{$data->checkin_date}}</td>
                                            <td class="center">
                                                {{$data->booking_time}}
                                            </td>
                                            <td class="center">
                                                <a href="edit" class="btn btn-tbl-edit btn-xs">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <button class="btn btn-tbl-delete btn-xs">
                                                    <i class="fa fa-trash-o "></i>
                                                </button>
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
        </div>
    </div>
    <!-- end page content -->
@stop

@section('jsfiles')
    <script src="{{ URL::asset('/js/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('/js/admin/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('/js/admin/pages/table/table_data.js') }}"></script>
    <script src="{{ URL::asset('/js/admin/pages/booking/view.js') }}"></script>
@stop
