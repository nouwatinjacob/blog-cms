@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
      Categories
    </div>
    <div class="panel-body">
        <table class="table table-hover">
        <thead>
          <th>Category Name</th>
          <th>Action</th> 
        </thead>
        @if($categories->count() > 0)
        @foreach($categories as $category)
        <tbody>
          <tr>
            <td>{{ $category->name }}</td>
            <td>
            <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-sm btn-primary"><span class="fas fa-pencil-alt">edit</span></a>
            <a href="{{ route('category.delete', ['id' => $category->id]) }}" class="btn btn-sm btn-danger"><span class="fas fa-trash">delete</span></a>
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