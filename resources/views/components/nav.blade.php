<!--  <div class="menu">
<div class="menu_block">
-->

<div class="menu">

    <div class="menu_block">





<div class="row">
    <div class="col-md-5">
        @foreach($menu['left'] as $item)

            <a href="{{$item->url}}">{{$item->title}}</a>

        @endforeach
    </div>
    <div class="col-md-2"> </div>
    <div class="col-md-5">
        @foreach($menu['right'] as $item)
            <a href="{{$item->url}}">{{$item->title}}</a>
        @endforeach
    </div>
</div>





    </div>
</div>


