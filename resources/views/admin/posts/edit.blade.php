@extends('layouts.app')

@section('content')

@include('admin.includes.errors')
  
   <div class="panel panel-default ">
    <div class="panel-heading">
      Edit Post: {{ $post->title }}
    </div>
    <div class="panel-body">
      <form action="{{ route('post.update', ['id' => $post->id])}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field()}}
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" value="{{ $post->title }}" id="title" class="form-control">
        </div>
        <div class="form-group">
          <label for="featured">Featured image</label>
          <input type="file" name="featured" id="featured" class="form-control">
        </div>
        <div class="form-group">
          <label for="category">Select a Category</label>
          <select name="category_id" id="category" class="form-control">
            @foreach($categories as $category)
              <option value="{{ $category->id }}"
              @if($post->category->id == $category->id)
                  selected
                @endif
              
              >{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
        <label for="tag">Select a Tag</label>
        <div class="checkbox">
          @foreach($tags as $tag)
          <label><input name="tags[]" value="{{$tag->id}}" type="checkbox"
            @foreach($post->tags as $t)
              @if($tag->id == $t->id)
                checked
              @endif
            @endforeach
          > {{$tag->tag}}</label>
          @endforeach
        </div>
        </div>
        <div class="form-group">
          <label for="title">Content</label>
          <textarea name="content" id="content" cols="5" rows="5" class="form-control">{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-success" type="submit">Update Post</button>
          </div>
        </div>
      </form>
    </div>
   </div>    

@stop