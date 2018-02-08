@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
      Trashed Posts
    </div>
    <div class="panel-body">
        <table class="table table-hover text-center">
        <thead class="text-center">
          <th>Image</th>
          <th>Title</th>
          <th>Action</th> 
        </thead>
        @if($posts->count() > 0)
        @foreach($posts as $post)
        <tbody>
          <tr>
            <td> <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="70px" height="60px"> </td>
            <td>{{ $post->title }}</td>
            <td>
            <!-- <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-sm btn-primary"><span class="fas fa-pencil-alt"> edit</span></a> -->
            <a href="{{ route('post.restore', ['id' => $post->id]) }}" class="btn btn-sm btn-success"><span class="fas fa-window-restore"> restore</span></a>
            <a href="{{ route('post.kill', ['id' => $post->id]) }}" class="btn btn-sm btn-danger"><span class="fas fa-trash"> delete</span></a>
            </td>
          </tr>      
        </tbody>
        @endforeach
        @else
        <tr>
          <th colspan="5" class="text-center">No Trashed Posts</th>
        </tr>
        @endif
      </table>
    </div>
</div>    
  



@stop