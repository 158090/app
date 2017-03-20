<h3> {{$category->name}}</h3>
<ul>
    @foreach($category->articles as $article)
    <li><a href="{{route("article.get", ["id"=>$article->id])}}">{{$article->title}}</a></li>
    @endforeach
</ul>
<form method="POST" action="{{route("article.post")}}">
  <div class="form-group">
    <label>Title</label>
    <input name="title" type="text" class="form-control" placeholder="...">
  </div>
    <div class="form-group">
    <label>Content</label>
    <textarea name="content" class="form-control" rows="3" placeholder="..."></textarea>
  </div>
 
    <input name="category_id" type="hidden" value="{{$category->id}}">
    
<div class="btn-group" role="group" aria-label="...">
  <button type="submit" class="btn btn-default">Create</button>
  <button type="reset" class="btn btn-default">Cancel</button>
  
</div>
 </form>