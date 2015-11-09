<div class="row even">
    <div class="col-md-6 image">
       <!-- <img src="/uploads/test/medium/{{$test->image}}" alt=""/>-->
        <div class="content"> <!-- "content" -->


            <textarea name="code" class="php">{{strip_tags($test->content)}}</textarea>

            <!--<textarea name="code" class="php" cols="40" rows="10">{{strip_tags($test->content)}}</textarea>
               <pre name="code" class="html" style="display: none;">{!!strip_tags($test->content)!!}</pre>


        <p>Краткий текст:<br /><textarea name="prw_text" id="prw_text" style="width:350px;"></textarea></p>
        <p>Полный текст:<br /><textarea name="text" id="text" style="width:350px;"></textarea></p>

              -->


        </div>
    </div>
    <div class="col-md-6 text">
        <h2>{{$test->title}}</h2>
        <a href="/tests/{{$test->slug}}">Read more</a>
    </div>
</div>