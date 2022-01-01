@extends('admin')
@section('content')
@if(session('admin_info'))
 <div class="alert alert-info">
 {{ session('admin_info') }}
 </div>
 @endif
<div class="mt-3">
    <h4>All Users ({{ count($users) }})</h4>
    <table class="table">
    <tr>
    <th>No.</th>
    <th>Name</th>
    <th>Email</th>
    <th>Role</th>
    <th>Created At</th>
    <th>Updated At</th>
    <th>Action</th>
    </tr>
    @foreach($users as $user)
    <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>User</td>
    <td>{{$user->created_at}}</td>
    <td>{{$user->updated_at}}</td>
    <td><a class="btn btn-info" href="#">Edit</a> <a class="btn btn-danger" href="{{ url("/admin/user/delete/$user->id") }}">Delete</a></td>
    </tr>
    @endforeach
    </table>
</div>
@endsection