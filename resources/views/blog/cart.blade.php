<title>Blog article</title>
<link rel="stylesheet" href="/uploads/slider/style1.css" type="text/css" media="screen" />
@extends('layouts.default')

@section('content')

    <h1>{{ $record->title }}</h1>
    <div class="content">
        <img src="/uploads/blog/medium/{{ $record->image }}" style="float: left" />
        <p>{!! $record->body !!}</p>
    </div>


@stop