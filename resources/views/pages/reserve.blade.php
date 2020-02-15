@extends('layout.default')
@section('content')
<form action="#" method="post" class="bg-white p-md-5 p-4 mb-5 border">
  <div class="row">
    <div class="col-md-6 form-group">
      <label class="text-black font-weight-bold" for="name">Name</label>
      <input type="text" name="name" id="name" class="form-control " required>
    </div>
    <div class="col-md-6 form-group">
      <label class="text-black font-weight-bold" for="phone">Phone</label>
      <input type="number" name="phone" id="phone" onKeyPress="if(this.value.length==11) return false;" class="form-control " required>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 form-group">
      <label class="text-black font-weight-bold" for="email">Email</label>
      <input name="email" type="email" id="email" class="form-control " required>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 form-group">
      <label class="text-black font-weight-bold" for="checkin_date">Date Check In</label>
      <input type="text" name="checkin_date" id="checkin_date" class="form-control" required readonly="readonly">
    </div>
    <div class="col-md-6 form-group">
      <label class="text-black font-weight-bold" for="checkout_date">Date Check Out</label>
      <input type="text" name="checkout_date" id="checkout_date" class="form-control" required readonly="readonly">
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 form-group">
      <label for="adults" class="font-weight-bold text-black">Adults</label>
      <div class="field-icon-wrap">
        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
        <select name="adults" id="adults" class="form-control" required>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="50">50</option>
        </select>
      </div>
    </div>
    <div class="col-md-6 form-group">
      <label for="children" class="font-weight-bold text-black">Children</label>
      <div class="field-icon-wrap">
        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
        <select name="children" id="children" class="form-control" required>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="50">50</option>
        </select>
      </div>
    </div>
  </div>



  <div class="row mb-4">
    <div class="col-md-12 form-group">
      <label class="text-black font-weight-bold" for="message">Notes</label>
      <textarea name="message" placeholder="Message.." id="message" class="form-control " cols="30" rows="8" required></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 form-group">
      <input id="btnReserve" value="Reserve Now" class="btn btn-primary text-white py-3 px-5">
    </div>
  </div>
</form>
@stop

@section('jsfiles')
    <script src="{{ URL::asset('js/reserve.js') }}"></script>
@stop
