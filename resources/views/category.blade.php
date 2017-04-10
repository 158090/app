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
    <label for="title_id">Title</label>
    <input id="title_id" name="title" class="form-control" type="text" placeholder="Type article name">
  </div>  
    <div class="form-group" id="div2">
    <label for="content_id">Content</label>
    <textarea id="content_id" name="content" class="form-control" rows="3" placeholder="Type article"></textarea>
  </div>
    
    <input name="category_id" class="form-control" type="hidden" value="{{$category->id}}">
    
  <div class="btn-group" role="group" aria-label="...">
  <button type="submit" class="btn btn-default" disabled>Create</button>
  <button type="reset" class="btn btn-default" disbaled>Cancel</button>
</div>

    <button type="button" id="button1"> Click this to show sth </button>
    
</form>

<script>
    $("#button1").click(function (){
    $.get("{{ route("xhr.category.create", ["id" => $category->id]) ", function (data, status) {
        console.log(status, data);
        for(var i=0;i<data.length;i++){$("#list").append('<li><a href="/article/'+data[i].id+'">'+ data[i].title+'</a></li>');
            }
    }
    }));
    
    
    
    </script>


  

      
@stop