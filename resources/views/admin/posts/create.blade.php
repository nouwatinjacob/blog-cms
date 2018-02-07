@extends('layouts.app')

@section('content')

  @if(count($errors) > 0)
    <ul class="list-group">
      @foreach($errors->all() as $error)
        <li class="list-group-item text-danger">
          {{ $error }}
        </li>
      @endforeach
    </ul>
  @endif
  
   <div class="panel panel-default ">
    <div class="panel-heading">
      Create new Post
    </div>
    <div class="panel-body">
      <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field()}}
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
          <label for="featured">Featured image</label>
          <input type="file" name="featured" id="title" class="form-control">
        </div>
        <div class="form-group">
          <label for="title">Content</label>
          <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-success" type="submit">Store Post</button>
          </div>
        </div>
      </form>
    </div>
   </div>    

@stop