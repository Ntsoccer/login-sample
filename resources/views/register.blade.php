@extends('app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">register</div>
    <div class="card-body">
      <form>
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name">
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" name="email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password">
        </div>
        <div class="form-group">
          <label for="password-confirm">Confirm Password</label>
          <input type="password" name="password-confirm">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection