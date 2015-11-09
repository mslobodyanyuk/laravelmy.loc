<!--вставить слайдер-->
<!-- <head>-->
  <title>Home</title>
  <link rel="stylesheet" href="/uploads/slider/style1.css" type="text/css" media="screen" />
  <script type="text/javascript">var _siteRoot='index.blade.php',_root='index.blade.php';</script>
  <script type="text/javascript" src="/uploads/slider/js/jquery.js"></script>
  <script type="text/javascript" src="/uploads/slider/js/scripts.js"></script>


<!--<div class="menu">-->
    @extends('layouts.default')

    @section('content')

            <div id="header">

                <div class="wrap">

                    <div id="slide-holder">
                        <div id="slide-runner">
                            <a href=""><img id="slide-img-1" src="/uploads/myslides/large/g4GaRvd88Y4ZVZf46qd9M72p75Rt7rEt.png" class="slide" alt="" /></a>
                            <a href=""><img id="slide-img-2" src="/uploads/myslides/large/kjaEosfGZwoGzapBZeI1zI1llWzo8mnd.png" class="slide" alt="" /></a>
                            <a href=""><img id="slide-img-3" src="/uploads/myslides/large/10.png" class="slide" alt="" /></a>
                            <div id="slide-controls">
                                <p id="slide-client" class="text"><strong>post: </strong><span></span></p>
                                <p id="slide-desc" class="text"></p>
                                <p id="slide-nav"></p>
                            </div>

                        </div>

                        <!--content featured gallery here -->
                    </div>
                    <script type="text/javascript">
                        if(!window.slider) var slider={};slider.data=[{"id":"slide-img-1","client":"РЕЗЮМЕ","desc":"файл резюме в pdf- формате"},{"id":"slide-img-2","client":"ТЕСТОВОЕ ЗАДАНИЕ ModeraTest","desc":"файлы проекта с описанием"},{"id":"slide-img-3","client":"О СЕБЕ","desc":"моё фото"}];
                    </script>
                </div>

            </div>
            <!--/header--><!--вставить слайдер-->

        @foreach($myslides as $slide)
            <img src="/uploads/myslides/small/{{$slide->image}}" alt=""/>
        @endforeach

    @stop








  