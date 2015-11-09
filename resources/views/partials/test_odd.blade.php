

<div class="row odd">

    <div class="col-md-6 text">
        <h2>{{$test->title}}</h2>
        <a href="/tests/{{$test->slug}}">Read more</a>

    </div>
    <div class="col-md-6 image">
        <div class="content"> <!-- "content" -->

            <textarea name="code" class="php" style="width: 90%; margin: 0px; height: 15%;">{{strip_tags($test->content)}}</textarea>

            <!--
             <textarea name="code" class="php" style="width:350px;">{{strip_tags($test->content)}}</textarea>
            <textarea name="code" class="php" cols="40" rows="10">{{strip_tags($test->content)}}</textarea>
             <textarea name="code" class="php" style="width:350px;">
               <pre name="code" class="html" style="display: none;">{!!strip_tags($test->content)!!}</pre>      -->
        </div>

    </div>

</div>

