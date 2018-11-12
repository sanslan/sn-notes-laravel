@extends('layout')
@section('title','List notes')

@section('content')
<div class='section notes-list'>
@foreach($notes as $note)
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">{{ $note->title }}</p>
            <a href="#" class="card-header-icon" aria-label="more options">
            <span class="icon">
                <i class="fas fa-angle-down" aria-hidden="true"></i>
            </span>
            </a>
        </header>
        <div class="card-content">
            <div class="content">
            <p>{{ $note->body }}</p>
            @foreach($note->tags as $tags)
                <a href="#">{{ $tags->name }}</a>
            @endforeach
            <br>
            <time >{{ $note->created_at->diffForHumans() }}</time>
            </div>
        </div>
        <footer class="card-footer">
            <a href="notes/{{ $note->id }}/edit" class="card-footer-item has-text-white-bis has-background-link">Edit</a>
            <form method="POST" action="notes/{{ $note->id }}" class='card-footer-item '>
                {{ csrf_field() }}
                @method('delete')
                <button href="#" class="button is-fullwidth has-background-danger has-text-white-bis">Delete</button>
            </form>
            
        </footer>
    </div>
@endforeach
</div>

@endsection