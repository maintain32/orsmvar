<h1>Merlita's Venue and Private Resort</h1>

<div class="contact-top heading">
    <h3>Booking Reference : {{$booking['booking_code']}}</h3>
</div>
<div class="faq-bottom">
    <div class="col-md-3 contact-left">
        <div class="shipping heading">
            <br>
            <p> Reservee : </p> <h4> {{$booking['name']}} </h4>
            <p> Reserved Date : </p> <h4> {{$booking['checkin_date']}} </h4>
            <p> Booking Time : </p> <h4> {{$booking['booking_time']}} </h4>
            <p> Total Guest : </p> <h4> {{$booking['total_guest']}}  </h4>
            <p> Event Description : </p> <h4> {{$booking['message']}} </h4>
        </div>
    </div>
    <div class="col-md-9 contact-left">
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
                    <td>{{$booking['booking_time']}} Booking</td>
                    <td>Fixed Rate Good for 50 guest</td>
                    <td>{{$booking['total_rate']}}</td>
                </tr>
                <tr>
                    <td>Additional Guest</td>
                    <td>{{$booking['additional_guest']}} pax additional</td>
                    <td>{{$booking['additional_guest_fee']}}</td>
                </tr>
                <tr>
                    <td>Additional Room</td>
                    <td>Barkada Room Good for 12 pax</td>
                    <td>{{$booking['additional_room']}}</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td>{{$booking['grand_total']}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <div class="clearfix"></div>
</div>
</br>
</br>
<p>Please confirm your booking by clicking the button below</p></br>
<a href="http://orsmvar.local.com/confirmBooking/{{$booking['booking_code']}}">Click Here</a>
