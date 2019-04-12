@extends('template')

@section('title')
    About Us
@endsection

@section('content')
<div class="content">
    <div class="title m-b-md">
        Everything you need to know about us
    </div>
    <div class="hobby">
    <h1>A little sneak peak about this website:</h1>
    <p>{{$paragraph}}</p>
    </div>
@endsection
