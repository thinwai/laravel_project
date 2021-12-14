<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm py-0">
<div class="container-fluid">
<a href="#" class="navbar-brand">Laravel Article Dashboard</a>
<ul class="navbar-nav">
<li class="nav-item">
<a href="#" class="nav-link active">Home</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">About</a>
</li>
</ul>
</div>
</nav>
<div>
    <div class="row w-100">
    <div class="col-md-2 bg-dark vh-100 text-white">
    <ul style="list-style-type:none;" class="mt-3">
    <li>Dashboard</li>
    <li>User</li>
    <ul style="list-style-type:none;">
        <li>All User</li>
        <li>Add New</li>
    </ul>
    <li>Article</li>
    <ul style="list-style-type:none;">
        <li>All Article</li>
        <li>Add New</li>
    </ul>
    <li>Category</li>
    <ul style="list-style-type:none;">
        <li class="bg-success">All Category</li>
        <li>Add New</li>
    </ul>
    <li>Logout</li>
    </ul>
    </div>
    <div class="col-md-10">
    @yield('content')
    </div>
    </div>
</div>
</body>
</html>