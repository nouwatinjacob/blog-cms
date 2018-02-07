@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-body">
        <table class="table table-hover">
        <thead>
          <th>Image</th>
          <th>Title</th>
          <th>Action</th> 
        </thead>
        @foreach($posts as $post)
        <tbody>
          <tr>
            <td> <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="70px" height="60px"> </td>
            <td>{{ $post->title }}</td>
            <td>
            <a href="" class="btn btn-sm btn-primary"><span class="fas fa-pencil-alt">edit</span></a>
            <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-sm btn-danger"><span class="fas fa-trash">trash</span></a>
            </td>
          </tr>      
        </tbody>
        @endforeach
      </table>
    </div>
</div>    
  



@stop