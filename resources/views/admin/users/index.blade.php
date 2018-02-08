@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
       Users
    </div>
    <div class="panel-body">
        <table class="table table-hover">
        <thead>
          <th>Image</th>
          <th>Name</th>
          <th>Permissions</th>
          <th>Action</th> 
        </thead>
        @if($users->count() > 0)
        @foreach($users as $user)
        <tbody>
          <tr>
            <td> <img src="{{ asset($user->profile->avatar) }}" alt="{{ $user->name }}" width="60px" height="60px" style="border-radius: 50%;"> </td>
            <td>{{ $user->name }}</td>
            <td>Permissions</td>
            <td>
            <a href="" class="btn btn-sm btn-danger"><span class="fas fa-trash"> delete</span></a>
            </td>
          </tr>      
        </tbody>
        @endforeach
        @else
        <tr>
        <th colspan="5" class="text-center">No User</th>
        </tr>
        @endif
      </table>
    </div>
</div>    
  



@stop