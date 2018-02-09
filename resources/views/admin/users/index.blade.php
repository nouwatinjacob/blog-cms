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
            <td>
              @if($user->admin)
              <a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-xm btn-danger">Remove as admin</a>
              @else
                <a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-xm btn-info">Make an admin</a>
              @endif            
             </td>
            <td>
              @if(Auth::id() !== $user->id)
                <a href="{{ route('user.delete', ['id' => $user->id])}}" class="btn btn-sm btn-danger"><span class="fas fa-trash"> delete</span></a>
              @endif
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