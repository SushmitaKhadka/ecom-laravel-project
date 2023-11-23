@extends('master')
@section('content')

<!-- <h1>
    log in page
</h1>

<button  class ="btn btn-primary">Click on me</button> -->

<div class="container custom-login">
    <div
        class="column">
            <div class="col-sm-4 col-sm-offset-4">
        <form action="/login" method="post">
  <div class="form-group">
    @csrf

    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-19">
      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-19">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" > Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>

</div>
  </div>
    </div>

@endsection
