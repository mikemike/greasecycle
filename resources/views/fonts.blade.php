@extends('layouts.main')

@section('content')
@foreach(["Sulphur Point","Prosto One","Rajdhani","Quicksand", "Cambay","Lato","Nunito","Montserrat","Product Sans","Manjari","Muli","Nanum Gothic","Poppins","Comfortaa","Maven Pro","Oxanium","Gruppo"] as $font)
    <p>Below is font - {{$font}}</p>
    <div class="wrap-start algn-cntr" style="padding:30px">
        <img src="{{asset('/images/grease-cycle-icon-1.svg')}}" alt="Logo" height="100px" style="margin-right:10px;">
        <h2 style="font-family:{{$font}}; color:#2FA008;letter-spacing:1px">Grease</h2>
        <h2 style="font-family:{{$font}}; color:#E76E0F;letter-spacing:1px">Cycle</h2>
    </div>
    <hr>
@endforeach
@endsection
