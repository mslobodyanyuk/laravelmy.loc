@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>{{$resume->title}}</h1>
            <img src="/uploads/resume/large/{{$resume->image}}"/>
            <div class="content">
                {!!$resume->content!!}
            </div>

            <div class="row">
                @foreach($resume->resgalleries as $image)
                    <div class="col-md-6">
                        <img src="/uploads/resimages/medium/{{$image->image}}" alt="{{$image->alt}}" title="{{$image->title}}" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@stop