

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-12">
          @include('inc.messages')

          <form action="/register/customer" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            Name <br>
            <input type="text" name="name" id="name"><br>
          
            Company Name <br>
            <input type="text" name="companyname" id="companyname"><br>
            NIC No <br>
            <input type="nic" name="nic" id="nic"><br>
            Phone No <br>
            <input type="text" name="phoneNo" id="phoneNo"><br>
            Reg. No <br>
            <input type="text" name="regNo" id="regNo"><br>
            Bank Acc. No <br>
            <input type="text" name="accountNo" id="accountNo"><br>
            Address <br>
            <input type="text" name="address" id="address"><br>
            Home Town <br>
            <input type="text" name="homeTown" id="homeTown"><br>
            Cover Image <br>
            <input type="file" name="image" id="image"><br>
          
            email <br>
            <input type="email" name="email" id="email"><br>
            password <br>
            <input type="password" name="password" id="password"><br>
            <br>
            <input type="submit" name="register" value="Register">
          </form>
          
      </div>
    </div>
</div>
@endsection
















