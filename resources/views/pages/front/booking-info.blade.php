@extends('layout.default')
@section('cssfiles')
    <link href="{{ URL::asset('css/front/booking-info.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')

    @include('includes.banner')

    <div class="contact">
        <div class="container">
            @forelse($booking as $data)
                <div class="contact-top heading">
                    <h3>Booking Reference : {{$data['booking_code']}} &nbsp;
                        @if($data['booking_status'] === 'booked')
                            <button type="button" class="btn btn-warning">Waiting for confirmation</button>
                        @elseif($data['booking_status'] === 'confirmed')
                            <button type="button" class="btn btn-warning">Waiting for payment</button>
                        @elseif($data['booking_status'] === 'cancelled')
                            <button type="button" class="btn btn-danger">Cancelled</button>
                        @elseif($data['booking_status'] === 'reserved')
                            <button type="button" class="btn btn-secondary">Reserved</button>
                        @endif

                        @if($data['booking_status'] !== 'reserved' || $data['booking_status'] !== 'cancelled')
                            <button type="button" class="btn btn-danger">Cancel Booking</button>
                        @endif
                    </h3>
                </div>
                <div class="faq-bottom">
                    <div class="col-md-4 contact-left">
                        <div class="shipping heading">
                            <br>
                            <p> Reservee : </p> <h4> {{$data['name']}} </h4>
                            <p> Reserved Date : </p> <h4> {{$data['checkin_date']}} </h4>
                            <p> Booking Time : </p> <h4> {{$data['booking_time']}} </h4>
                            <p> Total Guest : </p> <h4> {{$data['total_guest']}}  </h4>
                            <p> Event Description : </p> <h4> {{$data['message']}} </h4>
                        </div>
                        <br>
                        <br>
                        <h4> Payment Information </h4>
                        <p> Please deposit an amount for downpayment : </p>
                        <p> BDO Account: </p>
                        <p> &nbsp;&nbsp; Account Number : 0007362938742342 </p>
                        <p> &nbsp;&nbsp; Account Name : Merlita's Venue and Resort </p>
                    </div>
                    <div class="col-md-8 contact-left">
                        <div class="shipping heading">
                            <br>
                            <h4> Computation Summary </h4> <br>
                            <table class="table table-striped">
                                <thead>
                                <col align="right">
                                <col align="center">
                                <col align="left">
                                <tr>
                                    <th style="width: 40%">Item</th>
                                    <th style="width: 50%">Description</th>
                                    <th style="width: 10%">Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{$data['booking_time']}} Booking</td>
                                    <td>Fixed Rate Good for 50 guest</td>
                                    <td>{{$data['total_rate']}}</td>
                                </tr>
                                <tr>
                                    <td>Additional Guest</td>
                                    <td>{{$data['additional_guest']}} pax additional</td>
                                    <td>{{$data['additional_guest_fee']}}</td>
                                </tr>
                                <tr>
                                    <td>Additional Room</td>
                                    <td>Barkada Room Good for 12 pax</td>
                                    <td>{{$data['additional_room']}}</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td></td>
                                    <td>{{$data['grand_total']}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <br>
                        <br>
                        <h4> Upload Payment Receipt </h4>
                        <form>
                            <!-- image-preview-filename input [CUT FROM HERE]-->
                            <div class="input-group image-preview">
                                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                <span class="input-group-btn">
                                    <!-- image-preview-clear button -->
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>
                                    <!-- image-preview-input -->

                                    <div class="btn btn-default image-preview-input">
                                        <span class="glyphicon glyphicon-folder-open"></span>
                                        <span class="image-preview-input-title">Browse</span>
                                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                                    </div>
                                </span>
                            </div>
                            <img src="{{ URL::asset('/img/select-photo.png') }}" alt="Select Receipt Image" class="img-fluid receipt-preview"/>
                        </form>
                    </div>
                    <br>
                    <div class="clearfix"></div>
                </div>
            @empty
                <div class="contact-top heading">
                    <h3>Booking Reference : No Booking Found</h3>
                </div>
                @include('includes.reserve-form');
            @endforelse
        </div>
    </div>
@stop

@section('jsfiles')
    <script src="{{ URL::asset('js/front/booking-info.js') }}"></script>
@stop
