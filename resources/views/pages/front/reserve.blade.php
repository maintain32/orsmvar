@extends('layout.default')
@section('content')

@include('includes.banner')
<div class="contact">
    <div class="container">
        <div class="contact-top heading">
            <h3>Event Reservation</h3>
        </div>
        @include('includes.reserve-form');
    </div>
</div>
@stop

@section('jsfiles')
<script src="{{ URL::asset('js/reserve.js') }}"></script>
@stop
