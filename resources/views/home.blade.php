@extends('template')

@section('title')
    Homepage
@endsection

@section('content')
<div class="content">
    <div class="title m-b-md">
        This is Home for
    </div>
    <div class="title m-b-md">
        My First Laravel Website
    </div>
    <div class="hobby">
    <h1>Here are the list of my hobbies :</h1>
    <ul style="list-style-type: none; padding: 0;margin-bottom: 30px;">
        @foreach ($hobbies as $hobby)
            <li>{{$hobby->title}}, which is {{$hobby->description}} for now for {{$hobby->duration}} hours</li>
        @endforeach
    </ul>
</div>
@endsection
