<title>Test task</title>
<link rel="stylesheet" href="/uploads/slider/style1.css" type="text/css" media="screen" />

<link type="text/css" rel="stylesheet" href="/uploads/SyntaxHighlighter_1.5.1/Styles/SyntaxHighlighter1.css"></link>
<script language="javascript" src="/uploads/SyntaxHighlighter_1.5.1/Scripts/shCore.js"></script>
<script language="javascript" src="/uploads/SyntaxHighlighter_1.5.1/Scripts/shBrushPhp.js"></script>
<script language="javascript" src="/uploads/SyntaxHighlighter_1.5.1/Scripts/shBrushXml.js"></script>

@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>{{$test->title}}</h1>
          <!--  <img src="/uploads/test/large/{{$test->image}}"/>-->
            <div class="content"> <!-- "content" -->

                @if( $test->slug=='scripts' or $test->slug=='recommends' )
                    @include('partials.test_cart_part1') <!--{!!$test->content!!}-->
                @else
                    @include('partials.test_cart_part')  <!--<pre name="code" class="html" style="display: none;">{!!strip_tags($test->content)!!}</pre>-->
                @endif


            </div>

            <div class="row">
                @foreach($test->testgalleries as $image)
                    <div class="col-md-6">
                        <img src="/uploads/testimages/medium/{{$image->image}}" alt="{{$image->alt}}" title="{{$image->title}}" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>



    <script language="javascript">
        dp.SyntaxHighlighter.ClipboardSwf = '/uploads/SyntaxHighlighter_1.5.1/Scripts/clipboard.swf';
        dp.SyntaxHighlighter.HighlightAll('code');
    </script>
@stop