@extends('layouts.header')
@section('header')
    @foreach($roomDetails as $detail )
        <p>{{$detail->room_name}}</p>
        <p>{{$detail->room_img}}</p>
        <p>{{$detail->room_desc}}</p>
        <p>{{$detail->roomClass->room_class}}</p>
        <p>Вместимость: {{$detail->room_capacity}}</p>
        <p>{{$detail->room_price}} Руб. в сутки</p>

    @endforeach
@endsection
