@extends('layouts.header')
@section('header')
    @foreach($rooms as $room)
        @dd($rooms)
        {{$rooms[0]->roomClass}}
    @endforeach
@endsection
