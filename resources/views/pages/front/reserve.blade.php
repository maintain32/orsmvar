@extends('layout.default')
@section('content')

@include('includes.banner')
<div class="contact">
    <div class="container">
        <div class="contact-top heading">
            <h3>Event Reservation</h3>
        </div>
        <div class="faq-bottom">
            <div class="col-md-12 contact-left">
                <div class="shipping heading">
                    <h4 id="shipping"> Book your events now.</h4>
                    <form action="#" method="post" class="bg-white p-md-5 p-4 mb-5 border">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="text-black font-weight-bold" for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control " required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="text-black font-weight-bold" for="phone">Phone</label>
                                <input type="text " name="phone" id="phone"
                                       onKeyPress="if(this.value.length==11) return false;" class="form-control "
                                       required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="text-black font-weight-bold" for="email">Email</label>
                                <input name="email" type="email" id="email" class="form-control " required>
                            </div>
                        </div>
                        <div class="row">
                            <div class='col-md-6 form-group'>
                                <label for="adults" class="font-weight-bold text-black">Check-in date</label>
                                <input type='text' class="form-control" name="checkin_date" id="checkin_date"
                                       autocomplete="off" required/>
                            </div>
                            <div class='col-md-6'>
                                <div class="form-group">
                                    <label for="adults" class="font-weight-bold text-black">Check-out date</label>
                                    <input type='text' class="form-control" name="checkout_date" id="checkout_date"
                                           autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="total_guest" class="font-weight-bold text-black">Total number of guest</label>
                                <input id="total_guest" type="number" min="1" max="200" pattern="/^-?d+.?d*$/"
                                       onkeydown="javascript: return event.keyCode == 69 ? false : true"
                                       onKeyPress="if(this.value.length==4) return false;" name="total_guest"
                                       class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="booking_time" class="font-weight-bold text-black">Hours</label>
                                <div class="field-icon-wrap">
                                    <select name="booking_time" id="booking_time" class="form-control" required>
                                        <option value="daytime">Daytime (8am - 4pm)</option>
                                        <option value="overnight">Overnight (8pm - 4am)</option>
                                        <option value="wholeday">22 hours (8am - 6am)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <div class="row col-md-12">
                                    <label class="text-black font-weight-bold" for="additional_room">Additional Room</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="box">
                                        <p>Yes</p>
                                        <div class="box-footer">
                                            <input type="radio" name="additional_room" value="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="box">
                                        <p>No</p>
                                        <div class="box-footer">
                                            <input type="radio" name="additional_room" value="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <div class="row col-md-12">
                                    <label class="text-black font-weight-bold" for="additional_gas">Additional Gas</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="box">
                                        <p>Yes</p>
                                        <div class="box-footer">
                                            <input type="radio" name="additional_gas" value="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="box">
                                        <p>No</p>
                                        <div class="box-footer">
                                            <input type="radio" name="additional_gas" value="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <div class="row col-md-12">
                                    <label class="text-black font-weight-bold" for="additional_refrigerator">Additional Refrigerator</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="box">
                                        <p>Yes</p>
                                        <div class="box-footer">
                                            <input type="radio" name="additional_refrigerator" value="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="box">
                                        <p>No</p>
                                        <div class="box-footer">
                                            <input type="radio" name="additional_refrigerator" value="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12 form-group">
                                <label class="text-black font-weight-bold" for="message">Notes</label>
                                <textarea name="message" placeholder="Message.." id="message" class="form-control "
                                          cols="30"
                                          rows="8" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input id="btnReserve" value="Reserve Now" class="btn btn-primary text-white py-3 px-5">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@stop

@section('jsfiles')
<script src="{{ URL::asset('js/reserve.js') }}"></script>
@stop
