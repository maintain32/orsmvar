@extends('layout.admin')

@section('cssfiles')
    <link href="/js/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@stop

@section('content')

<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">All Bookings</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
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
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="row p-b-20">
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="btn-group">
                                    <a href="new_booking.html" id="addRow" class="btn btn-info">
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
                                            <a href="javascript:;">
                                                <i class="fa fa-print"></i> Print </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
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
                                    <th class="center"></th>
                                    <th class="center"> Name </th>
                                    <th class="center"> Mobile </th>
                                    <th class="center"> Email </th>
                                    <th class="center"> Arrive </th>
                                    <th class="center"> Depart </th>
                                    <th class="center"> Room Type </th>
                                    <th class="center"> Payment </th>
                                    <th class="center"> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="odd gradeX">
                                    <td class="user-circle-img">
                                        <img src="assets/img/user/user1.jpg" alt="">
                                    </td>
                                    <td class="center">Rajesh</td>
                                    <td class="center"><a href="tel:4444565756">
                                            4444565756 </a></td>
                                    <td class="center"><a href="mailto:rajesh@gmail.com ">
                                            rajesh@gmail.com </a></td>
                                    <td class="center">23/04/2017</td>
                                    <td class="center">25/04/2017</td>
                                    <td class="center">Single</td>
                                    <td class="center">
                                        <span class="label label-sm label-success">Paid </span>
                                    </td>
                                    <td class="center">
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="user-circle-img">
                                        <img src="assets/img/user/user10.jpg" alt="">
                                    </td>
                                    <td class="center">Pooja Patel</td>
                                    <td class="center"><a href="tel:444786876">
                                            444786876 </a></td>
                                    <td class="center"><a href="mailto:pooja@gmail.com">
                                            pooja@gmail.com </a></td>
                                    <td class="center">13/05/2017</td>
                                    <td class="center">15/05/2017</td>
                                    <td class="center">Double</td>
                                    <td class="center">
                                        <span class="label label-sm label-warning">Unpaid </span>
                                    </td>
                                    <td class="center">
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="user-circle-img">
                                        <img src="assets/img/user/user2.jpg" alt="">
                                    </td>
                                    <td class="center">Sarah Smith</td>
                                    <td class="center"><a href="tel:444786876">
                                            444786876 </a></td>
                                    <td class="center"><a href="mailto:sarah@gmail.com">
                                            sarah@gmail.com </a></td>
                                    <td class="center">13/05/2017</td>
                                    <td class="center">15/05/2017</td>
                                    <td class="center">Coutage</td>
                                    <td class="center">
                                        <span class="label label-sm label-warning">Unpaid </span>
                                    </td>
                                    <td class="center">
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="user-circle-img">
                                        <img src="assets/img/user/user3.jpg" alt="">
                                    </td>
                                    <td class="center">John Deo</td>
                                    <td class="center"><a href="tel:444786876">
                                            444786876 </a></td>
                                    <td class="center"><a href="mailto:john@gmail.com">
                                            john@gmail.com </a></td>
                                    <td class="center">13/05/2017</td>
                                    <td class="center">15/05/2017</td>
                                    <td class="center">Double</td>
                                    <td class="center">
                                        <span class="label label-sm label-success">Paid </span>
                                    </td>
                                    <td class="center">
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="user-circle-img">
                                        <img src="assets/img/user/user4.jpg" alt="">
                                    </td>
                                    <td class="center">Jay Soni</td>
                                    <td class="center"><a href="tel:444786876">
                                            444786876 </a></td>
                                    <td class="center"><a href="mailto:jay@gmail.com">
                                            jay@gmail.com </a></td>
                                    <td class="center">13/05/2017</td>
                                    <td class="center">15/05/2017</td>
                                    <td class="center">Vila</td>
                                    <td class="center">
                                        <span class="label label-sm label-warning">Unpaid </span>
                                    </td>
                                    <td class="center">
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="user-circle-img">
                                        <img src="assets/img/user/user5.jpg" alt="">
                                    </td>
                                    <td class="center">Jacob Ryan</td>
                                    <td class="center"><a href="tel:444786876">
                                            444786876 </a></td>
                                    <td class="center"><a href="mailto:jacob@gmail.com">
                                            jacob@gmail.com </a></td>
                                    <td class="center">13/05/2017</td>
                                    <td class="center">15/05/2017</td>
                                    <td class="center">Coutage</td>
                                    <td class="center">
                                        <span class="label label-sm label-success">Paid </span>
                                    </td>
                                    <td class="center">
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="user-circle-img">
                                        <img src="assets/img/user/user6.jpg" alt="">
                                    </td>
                                    <td class="center">Megha Trivedi</td>
                                    <td class="center"><a href="tel:444786876">
                                            444786876 </a></td>
                                    <td class="center"><a href="mailto:megha@gmail.com">
                                            megha@gmail.com </a></td>
                                    <td class="center">13/05/2017</td>
                                    <td class="center">15/05/2017</td>
                                    <td class="center">Double</td>
                                    <td class="center">
                                        <span class="label label-sm label-success">Paid </span>
                                    </td>
                                    <td class="center">
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="user-circle-img">
                                        <img src="assets/img/user/user1.jpg" alt="">
                                    </td>
                                    <td class="center">Rajesh</td>
                                    <td class="center"><a href="tel:444786876">
                                            444786876 </a></td>
                                    <td class="center"><a href="mailto:rajesh@gmail.com">
                                            rajesh@gmail.com </a></td>
                                    <td class="center">13/05/2017</td>
                                    <td class="center">15/05/2017</td>
                                    <td class="center">Vila</td>
                                    <td class="center">
                                        <span class="label label-sm label-warning">Unpaid </span>
                                    </td>
                                    <td class="center">
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="user-circle-img">
                                        <img src="assets/img/user/user1.jpg" alt="">
                                    </td>
                                    <td class="center">Rajesh</td>
                                    <td class="center"><a href="tel:4444565756">
                                            4444565756 </a></td>
                                    <td class="center"><a href="mailto:rajesh@gmail.com ">
                                            rajesh@gmail.com </a></td>
                                    <td class="center">23/04/2017</td>
                                    <td class="center">25/04/2017</td>
                                    <td class="center">Single</td>
                                    <td class="center">
                                        <span class="label label-sm label-success">Paid </span>
                                    </td>
                                    <td class="center">
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="user-circle-img">
                                        <img src="assets/img/user/user10.jpg" alt="">
                                    </td>
                                    <td class="center">Pooja Patel</td>
                                    <td class="center"><a href="tel:444786876">
                                            444786876 </a></td>
                                    <td class="center"><a href="mailto:pooja@gmail.com">
                                            pooja@gmail.com </a></td>
                                    <td class="center">13/05/2017</td>
                                    <td class="center">15/05/2017</td>
                                    <td class="center">Double</td>
                                    <td class="center">
                                        <span class="label label-sm label-warning">Unpaid </span>
                                    </td>
                                    <td class="center">
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="user-circle-img">
                                        <img src="assets/img/user/user2.jpg" alt="">
                                    </td>
                                    <td class="center">Sarah Smith</td>
                                    <td class="center"><a href="tel:444786876">
                                            444786876 </a></td>
                                    <td class="center"><a href="mailto:sarah@gmail.com">
                                            sarah@gmail.com </a></td>
                                    <td class="center">13/05/2017</td>
                                    <td class="center">15/05/2017</td>
                                    <td class="center">Coutage</td>
                                    <td class="center">
                                        <span class="label label-sm label-warning">Unpaid </span>
                                    </td>
                                    <td class="center">
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="user-circle-img">
                                        <img src="assets/img/user/user3.jpg" alt="">
                                    </td>
                                    <td class="center">John Deo</td>
                                    <td class="center"><a href="tel:444786876">
                                            444786876 </a></td>
                                    <td class="center"><a href="mailto:john@gmail.com">
                                            john@gmail.com </a></td>
                                    <td class="center">13/05/2017</td>
                                    <td class="center">15/05/2017</td>
                                    <td class="center">Double</td>
                                    <td class="center">
                                        <span class="label label-sm label-success">Paid </span>
                                    </td>
                                    <td class="center">
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="user-circle-img">
                                        <img src="assets/img/user/user4.jpg" alt="">
                                    </td>
                                    <td class="center">Jay Soni</td>
                                    <td class="center"><a href="tel:444786876">
                                            444786876 </a></td>
                                    <td class="center"><a href="mailto:jay@gmail.com">
                                            jay@gmail.com </a></td>
                                    <td class="center">13/05/2017</td>
                                    <td class="center">15/05/2017</td>
                                    <td class="center">Vila</td>
                                    <td class="center">
                                        <span class="label label-sm label-warning">Unpaid </span>
                                    </td>
                                    <td class="center">
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="user-circle-img">
                                        <img src="assets/img/user/user5.jpg" alt="">
                                    </td>
                                    <td class="center">Jacob Ryan</td>
                                    <td class="center"><a href="tel:444786876">
                                            444786876 </a></td>
                                    <td class="center"><a href="mailto:jacob@gmail.com">
                                            jacob@gmail.com </a></td>
                                    <td class="center">13/05/2017</td>
                                    <td class="center">15/05/2017</td>
                                    <td class="center">Coutage</td>
                                    <td class="center">
                                        <span class="label label-sm label-success">Paid </span>
                                    </td>
                                    <td class="center">
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="user-circle-img">
                                        <img src="assets/img/user/user6.jpg" alt="">
                                    </td>
                                    <td class="center">Megha Trivedi</td>
                                    <td class="center"><a href="tel:444786876">
                                            444786876 </a></td>
                                    <td class="center"><a href="mailto:megha@gmail.com">
                                            megha@gmail.com </a></td>
                                    <td class="center">13/05/2017</td>
                                    <td class="center">15/05/2017</td>
                                    <td class="center">Double</td>
                                    <td class="center">
                                        <span class="label label-sm label-success">Paid </span>
                                    </td>
                                    <td class="center">
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td class="user-circle-img">
                                        <img src="assets/img/user/user1.jpg" alt="">
                                    </td>
                                    <td class="center">Rajesh</td>
                                    <td class="center"><a href="tel:444786876">
                                            444786876 </a></td>
                                    <td class="center"><a href="mailto:rajesh@gmail.com">
                                            rajesh@gmail.com </a></td>
                                    <td class="center">13/05/2017</td>
                                    <td class="center">15/05/2017</td>
                                    <td class="center">Vila</td>
                                    <td class="center">
                                        <span class="label label-sm label-warning">Unpaid </span>
                                    </td>
                                    <td class="center">
                                        <a href="edit_booking.html" class="btn btn-tbl-edit btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button class="btn btn-tbl-delete btn-xs">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                    </td>
                                </tr>
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
    <script src="/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/js/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
    <script src="/js/admin/pages/table/table_data.js"></script>
@stop
