@extends('layout')
@section('title','New note')
@section('content')
<div class='section add-tag'>
  <h1 class="title has-text-centered">Add tag</h1>
  <form method="Post" action="{{ route('tags.store') }}">
    {{ csrf_field() }}

    <div class="field">
      <label class="label">Name</label>
      <div class="control">
        <input class="input is-success <?php if($errors->has('title')) echo 'is-danger' ?>" value="{{ old('name') }}" type="text" name='name' placeholder="Tag name">
        @if($errors->has('name'))
          <p class="help is-danger">{{ $errors->first('name') }}</p>
        @endif
      </div>
    </div>
    <div class="field is-grouped">
      <input type='submit' class="button is-success is-fullwidth" value="Save">
    </div>
  </form>
  @if($errors->first('message'))
    <div class='section has-text-danger has-text-centered is-size-5'> {{ $errors->first('message') }} </div>
  @endif
</div>
@endsection