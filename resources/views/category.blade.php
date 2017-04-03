@extends('welcome')
@section('content')

<h3>{{$category->name}}</h3>
<ul id="list">
    @foreach($category->articles as $article)
    <li><a href="{{route("article.get", ["id"=>$article->id])}}">{{$article->title}}</a></li>
    @endforeach
    
    
    
</ul>
<form method="POST" action="{{route("article.post")}}">
  
  <div class="form-group" id="div1">
    <label for="11">Title</label>
    <input id="11" name="title" class="form-control" type="text" placeholder="Type article name">
  </div>  
    <div class="form-group" id="div2">
    <label for="12">Content</label>
    <textarea id="12" name="content" class="form-control" rows="3" placeholder="Type article"></textarea>
  </div>
    
    <input name="category_id" class="form-control" type="hidden" value="{{$category->id}}">
    
  <div class="btn-group" role="group" aria-label="...">
  <button type="submit" class="btn btn-default">Create</button>
  <button type="reset" class="btn btn-default">Cancel</button>
</div>

</form>

<script>
    
$(document).ready(function(){

        $.get("<?php echo route("xhr.category.create", ["id" => $category->id]) ?>", function (data, status)
        console.log(status, data);
        for(var i=0;i<data.length;i++){$("#list").append{'<li><a href="/article/'+data[i].id+'">'+ data[i].title+'</a></li>');
            }
        });
                
//         alert("Data: " + data + "\nStatus: " + status);
//       });

});
</script>

@stop