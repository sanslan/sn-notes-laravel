@extends('layout')
@section('title','List tags')

@section('content')
<div class='section notes-list'>
@foreach($tags as $tag)
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">{{ $tag->name }}</p>
            <a href="#" class="card-header-icon" aria-label="more options">
            <span class="icon">
                <i class="fas fa-angle-down" aria-hidden="true"></i>
            </span>
            </a>
        </header>

        <footer class="card-footer">
            <form method="POST" action="notes/{{ $tag->id }}" class='card-footer-item '>
                {{ csrf_field() }}
                @method('delete')
                <button href="#" class="button is-fullwidth has-background-danger has-text-white-bis">Delete</button>
            </form>
            
        </footer>
    </div>
@endforeach
</div>

@endsection