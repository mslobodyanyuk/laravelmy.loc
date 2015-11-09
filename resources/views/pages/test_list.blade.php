<title>Test</title>
<link rel="stylesheet" href="/uploads/slider/style1.css" type="text/css" media="screen" />

<link type="text/css" rel="stylesheet" href="/uploads/SyntaxHighlighter_1.5.1/Styles/SyntaxHighlighter.css"></link>
<script language="javascript" src="/uploads/SyntaxHighlighter_1.5.1/Scripts/shCore.js"></script>
<script language="javascript" src="/uploads/SyntaxHighlighter_1.5.1/Scripts/shBrushPhp.js"></script>
<script language="javascript" src="/uploads/SyntaxHighlighter_1.5.1/Scripts/shBrushXml.js"></script>


@extends('layouts.default')

@section('content')

    @foreach($tests as $id=>$test)

        @if(($id%2) == 0)
            @include('partials.test_odd')
        @else
            @if( $test->slug=='scripts' or $test->slug=='recommends' )
                @include('partials.test_even1')
            @else
                @include('partials.test_even')
            @endif
        @endif

    @endforeach
    <script language="javascript">
        dp.SyntaxHighlighter.ClipboardSwf = '/uploads/SyntaxHighlighter_1.5.1/Scripts/clipboard.swf';
        dp.SyntaxHighlighter.HighlightAll('code');
    </script>

@stop







