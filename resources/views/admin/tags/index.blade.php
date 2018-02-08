@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
      Tags
    </div>
    <div class="panel-body">        
        <table class="table table-hover">
        <thead>
          <th>Tag Name</th>
          <th>Action</th> 
        </thead>
        @if($tags->count() > 0)
        @foreach($tags as $tag)
        <tbody>
          <tr>
            <td>{{ $tag->tag }}</td>
            <td>
            <a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="btn btn-sm btn-primary"><span class="fas fa-pencil-alt">edit</span></a>
            <a href="{{ route('tag.delete', ['id' => $tag->id]) }}" class="btn btn-sm btn-danger"><span class="fas fa-trash">delete</span></a>
            </td>
          </tr>      
        </tbody>
        @endforeach
        @else
        <tr>
        <th colspan="5" class="text-center">No Categories</th>
        </tr>
        @endif
      </table>
    </div>
</div>    
  



@stop