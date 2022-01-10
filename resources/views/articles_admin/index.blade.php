@extends('admin')
@section('content')
@if(session('admin_info'))
 <div class="alert alert-info">
 {{ session('admin_info') }}
 </div>
 @endif
<div class="mt-3 table-responsive">
<!-- Pagination -->
    <h4>All Articles ({{ count($articles) }})</h4>
    <table class="table overflow-y">
    <tr>
    <th>No.</th>
    <th>Title</th>
    <th>Content</th>
    <th>Category</th>
    <th>Created By</th>
    <th>Status</th>
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
    <td>
        @if($article->status->name=="Pending")
        <a class="btn btn-warning">{{$article->status->name}}</a>
        @elseif($article->status->name=="Confirmed")
        <a class="btn btn-success">{{$article->status->name}}</a>
        @else
        <a class="btn btn-danger">{{$article->status->name}}</a>
        @endif
    </td>
    <td>{{$article->created_at}}</td>
    <td>{{$article->updated_at}}</td>
    <td><a class="btn btn-info" href="#">Confirm</a> <a class="btn btn-danger" href="{{ url("/admin/article/delete/$article->id") }}">Reject</a></td>
    </tr>
    @endforeach
    </table>
</div>
@endsection