@extends('layout')
@section('title','Login page')
@section('content')
<div class='section login-page'>
  <h1 class="title has-text-centered">Login</h1>
  <form method="Post" action='/login'>
    {{ csrf_field() }}

    <div class="field">
      <label class="label">Username</label>
      <div class="control">
        <input class="input is-success <?php if($errors->has('username')) echo 'is-danger' ?>" value="{{ old('username') }}" type="text" name='username' placeholder="Username">
        @if($errors->has('username'))
          <p class="help is-danger">{{ $errors->first('username') }}</p>
        @endif
      </div>
    </div>


    <div class="field">
      <label class="label">Password</label>
      <div class="control ">
        <input class="input is-success <?php if($errors->has('password')) echo 'is-danger' ?>" type="password" name='password' placeholder="Password">
        @if($errors->has('password'))
          <p class="help is-danger">{{ $errors->first('password') }}</p>
        @endif
      </div>
    </div>

    <div class="field is-grouped">
      <input type='submit' class="button is-link is-fullwidth" value="Login">
    </div>
  </form>
  @if($errors->first('message'))
    <div class='section has-text-danger has-text-centered is-size-5'> {{ $errors->first('message') }} </div>
  @endif
</div>
@endsection