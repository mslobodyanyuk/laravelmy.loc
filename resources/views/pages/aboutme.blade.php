<title>About myself</title>
<link rel="stylesheet" href="/uploads/slider/style1.css" type="text/css" media="screen" />
@extends('layouts.default')

@section('content')

    <h1>О себе</h1>
    <div class="row">
        <div class="col-md-6">
            {!! $aboutme->content!!}
        </div>
        <div class="col-md-6">
            <img src="/uploads/aboutme/{{ $aboutme->image }}" />
        </div>
    </div>

@stop