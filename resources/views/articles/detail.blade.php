@extends("layouts.app")
@section("content")
 <div class="container">
 <div class="card mb-2">
 <div class="card-body">
 <h5 class="card-title">{{ $article->title }}</h5>
 <div class="card-subtitle mb-2 text-muted small">
 By <b>{{ $article->user->name }}</b>,
 {{ $article->created_at->diffForHumans() }},
 Category: <b>{{ $article->category->name }}</b>
 </div>
 <p class="card-text">{{ $article->body }}</p>
 @if($article->user_id == auth()->user()->id)
 <a class="btn btn-warning"
 href="{{ url("/articles/delete/$article->id") }}">
 Delete
 </a>
 @endif
 </div>
 </div>
 <ul class="list-group mb-2">
 <li class="list-group-item active">
 <b>Comments ({{ count($article->comments) }})</b>
 </li>
 @foreach($article->comments as $comment)
 <li class="list-group-item">
 {{ $comment->content }}
 @if($comment->user_id == auth()->user()->id)
 <a href="{{ url("/comments/delete/$comment->id") }}"
 class="close">
 &times;
 </a>
 @endif
 <div class="small mt-2">
 By <b>{{ $comment->user->name }}</b>,
 {{ $comment->created_at->diffForHumans() }}
 </div>
 </li>
 @endforeach
 </ul>
 @auth
 <form action="{{ url('/comments/add') }}" method="post">
 @csrf
 <input type="hidden" name="article_id"
 value="{{ $article->id }}">
 <textarea name="content" class="form-control mb-2"
 placeholder="New Comment"></textarea>
 <input type="submit" value="Add Comment"
 class="btn btn-secondary">
 </form>
 @endauth
 </div>
@endsection