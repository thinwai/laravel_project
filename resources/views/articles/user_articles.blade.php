@extends("layouts.app")
@section("content")
 <div class="container">
 @if(session('info'))
 <div class="alert alert-info">
 {{ session('info') }}
 </div>
 @endif

 <b>My Articles ({{ count($user->articles) }})</b>
 @foreach($user->articles as $article)
 <li class="list-group-item">
 <p>{{ $article->title }}</p>
 <p>{{ $article->body }}</p>
 
 <div class="small mt-2">
 By <b>{{ $article->user->name }}</b>,
 {{ $article->created_at->diffForHumans() }}
 </div>
 </li>
 @endforeach
 </div>
@endsection