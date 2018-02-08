@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

<div class="panel panel-default">
    <div class="panel-heading">
      Create new Category
    </div>
    <div class="panel-body">
    <form action="{{ route('tag.store') }}" method="POST">
    {{ csrf_field()}}
     <div class="form-group">
          <label for="tag">Tag Name</label>
          <input type="text" name="tag" id="tag" class="form-control">
     </div>
        <div class="form-group">
        <div class="text-center">
          <button class="btn btn-success" type="submit">Store Tag</button>
        </div>
      </div >
    </form> 
    </div>
</div>    
@stop