<!--<a href="/uploads/resume/resume_nocode_en.pdf">Скачать!</a>-->

@extends('layouts.default')

@section('content')

    @foreach($resumes as $id=>$resume)

        @if(($id%2) == 0)
            @include('partials.resume_odd')
        @else
            @include('partials.resume_even')
        @endif

    @endforeach

@stop