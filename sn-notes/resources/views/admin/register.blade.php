@extends('layout')
@section('title','Register page')
@section('content')
<div class='section register-page'>
  <h1 class="title has-text-centered">Register</h1>
  <form method="Post" action='/register'>
    {{ csrf_field() }}
    <div class="field">
      <label class="label">Full Name</label>
      <div class="control">
        <input class="input is-success <?php if($errors->has('name')) echo 'is-danger' ?>" value="{{ old('name') }}" type="text" name='name' placeholder="Name">
        @if($errors->has('name'))
          <p class="help is-danger">{{ $errors->first('name') }}</p>
        @endif
      </div>
    </div>

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
      <label class="label">Email</label>
      <div class="control">
        <input class="input is-success <?php if($errors->has('email')) echo 'is-danger' ?>" value="{{ old('email') }}" type="email" name='email' placeholder="Email">
        @if($errors->has('name'))
          <p class="help is-danger">{{ $errors->first('email') }}</p>
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
    <div class="field">
      <label class="label">Confirm Password</label>
      <div class="control">
        <input class="input is-success" type="password" name='password_confirmation' placeholder="Password">
      </div>
    </div>

    <div class="field is-grouped">
      <input type='submit' class="button is-link is-fullwidth" value="Register">
    </div>
  </form>
</div>
@endsection