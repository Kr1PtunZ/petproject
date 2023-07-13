@extends('layouts.header')
@section('header')
    @foreach($rooms as $room)
            <p>{{$room->room_name}}</p>
            <img src="{{$room->room_img}}" alt="room image">
            <p>{{Str::limit($room->room_desc, 50) }}</p>
            <a href="{{url('details/'.$room->id)}}">Подробнее</a>
    @endforeach
@endsection
