@extends('layout')
@section('title','New note')
@section('content')
<div class='section add-note'>
  <h1 class="title has-text-centered">Edit note</h1>
  <form method="Post" action="{{ route('notes.update',$note->id) }}">
    {{ csrf_field() }}
    @method('patch')

    <div class="field">
      <label class="label">Title</label>
      <div class="control">
        <input class="input is-success <?php if($errors->has('title')) echo 'is-danger' ?>" value="{{ $note->title }}" type="text" name='title' placeholder="Title">
        @if($errors->has('title'))
          <p class="help is-danger">{{ $errors->first('title') }}</p>
        @endif
      </div>
    </div>

    <div class="field">
      <label class="label">Body</label>
      <div class="control">
        <textarea class="textarea is-success <?php if($errors->has('body')) echo 'is-danger' ?>" rows="4" name='body' placeholder="Body">{{ $note->body }}</textarea>
        @if($errors->has('body'))
          <p class="help is-danger">{{ $errors->first('body') }}</p>
        @endif
      </div>
    </div>


    <div class="field is-grouped">
      <input type='submit' class="button is-success is-fullwidth" value="Update note">
    </div>
  </form>
  @if($errors->first('message'))
    <div class='section has-text-danger has-text-centered is-size-5'> {{ $errors->first('message') }} </div>
  @endif
</div>
@endsection