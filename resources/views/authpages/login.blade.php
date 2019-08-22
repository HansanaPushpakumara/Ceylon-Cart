
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-12">
          @include('inc.messages')

          <form action="/login/user" method="post">
            {{ csrf_field() }}
            email <br>
            <input type="email" name="email" id="email"><br>
            password <br>
            <input type="password" name="password" id="password"><br>
            <br>
            <input type="submit" name="register" value="Login">
          </form>
      </div>
    </div>
</div>
@endsection









