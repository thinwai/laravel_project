@extends("admin")
@section("content")
<div class="mt-3">
    <h4>My Category ({{ count($categories) }})</h4>
<form method="post">
 @csrf
 <div class="form-group">
    <input type="text" name="name" class="form-control" placeholder="Category Name">
    <input type="submit" value="Create Category" class="btn btn-primary">
 </div>
 </form>
    <table class="table">
    <tr>
    <th>No.</th>
    <th>ID</th>
    <th>Name</th>
    <th>Created At</th>
    <th>Updated At</th>
    <th>Action</th>
    </tr>
    @foreach($categories as $category)
    <tr>
    <td></td>
    <td>{{$category->id}}</td>
    <td>{{$category->name}}</td>
    <td>{{$category->created_at}}</td>
    <td>{{$category->updated_at}}</td>
    <td><a class="btn btn-info" href="/admin/category/edit/{{$category->id}}">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
    </tr>
    @endforeach
    </table>
</div>
@endsection