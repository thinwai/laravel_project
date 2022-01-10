<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.js') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm py-0">
<div class="container-fluid">
<a href="#" class="navbar-brand">Laravel Article Dashboard</a>
<ul class="navbar-nav">
<li class="nav-item">
<a href="/" class="nav-link active">Home</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">About</a>
</li>
</ul>
</div>
</nav>
<div>
    <div class="row w-100 vh-100">
    <div class="col-md-2 bg-dark">    
    <div class="nav flex-column nav-pills mt-2">
    <a href="{{ url('/admin') }}" class="nav-link text-white" >Dashboard</a>
    <a href="{{ url('/admin/article') }}" class="nav-link text-white">Article</a>
    <a href="{{ url('/admin/category') }}" class="nav-link text-white">Category</a>
    <a href="{{ url('/admin/user') }}" class="nav-link text-white">User</a>
    </div>
    </div>
    <div class="col-md-10">
    @yield('content')
    </div>
    </div>
</div>
<script>
  const currentLocation = location.href;
  const menuItem = document.querySelectorAll('a');
  for(i=0; i<menuItem.length; i++){
    if(menuItem[i].href === currentLocation){
      //menuItem[i].className = "active";
      menuItem[i].classList.add('active');
    }
  }
</script>
</body>
</html>