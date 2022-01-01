@extends('admin')
@section('content')
@if(session('admin_info'))
 <div class="alert alert-info">
 {{ session('admin_info') }}
 </div>
 @endif
<div class="mt-3">
    <h4>All Articles ({{ count($articles) }})</h4>
    <table class="table">
    <tr>
    <th>No.</th>
    <th>Title</th>
    <th>Content</th>
    <th>Category</th>
    <th>Created By</th>
    <th>Created At</th>
    <th>Updated At</th>
    <th>Action</th>
    </tr>
    @foreach($articles as $article)
    <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$article->title}}</td>
    <td>{{$article->body}}</td>
    <td>{{$article->category->name}}</td>
    <td>{{$article->user->name}}</td>
    <td>{{$article->created_at}}</td>
    <td>{{$article->updated_at}}</td>
    <td><a class="btn btn-info" href="#">Edit</a> <a class="btn btn-danger" href="{{ url("/admin/article/delete/$article->id") }}">Delete</a></td>
    </tr>
    @endforeach
    </table>
</div>
@endsection