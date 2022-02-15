@extends('layouts.main')

@section('content')
    <videogames-list user="{{Auth::check()}}"></videogames-list>
@endsection