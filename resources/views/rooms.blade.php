@extends('layouts.header')
@section('header')
    @foreach($rooms as $room)
        <form action="{{route('details')}}" method="POST">
            @csrf
            <p>{{$room->room_name}}</p>
            <img src="{{$room->room_img}}" alt="room image">
            <p>{{Str::limit($room->room_desc, 50) }}</p>
            <input type="hidden" value="{{$room->id}}" name="roomId">
            <input type="submit" value="Подробнее">

        </form>
    @endforeach
@endsection
