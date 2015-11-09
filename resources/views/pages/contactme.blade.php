<title>Contacts</title>
<link rel="stylesheet" href="/uploads/slider/style1.css" type="text/css" media="screen" />


@extends('layouts.default')

@section('content')

    <h1>Контакты:</h1>
    <div class="row">
        <div class="col-md-6">
            {!! $contactme->content!!}
        </div>
    </div>

@stop