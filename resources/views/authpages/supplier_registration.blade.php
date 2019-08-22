@extends('layouts.app')

@section('content')
<div class="container">
    
      <form action="/register/supplier" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
<div class="row">
        <div class="col-sm-4">
            <h4>User Details</h4>

            Your Name *<br>
            <input type="text" name="name" id="name"><br>
        
            Phone No *<br>
            <input type="text" name="phoneNo" id="phoneNo"><br>
        
            NIC No *<br>
            <input type="text" name="nic" id="nic"><br>
    
            Bank Acc. No *<br>
            <input type="text" name="accountNo" id="accountNo"><br>
        </div>

        <div class="col-sm-4">
            <h4>Farm Details</h4>

            Farm Name *<br>
            <input type="text" name="farmName" id="farmName"><br>
            
            Farm Reg. No <br>
            <input type="text" name="farmRegNo" id="farmRegNo"><br>
            
            Address *<br>
            <input type="text" name="address" id="address"><br>
            
            Home Town *<br>
            <input type="text" name="homeTown" id="homeTown"><br>
            
            Location <br>
            <input type="text" name="location" id="location"><br>
            
            Cover Image <br>
            <input type="file" name="image" id="image"><br>
            
            Breif Description About farm <br>
            <input type="text" name="supplier_description" id="supplier_description"><br>
        </div>

        <div class="col-sm-4">
            <h4>Login Details</h4>

            Email *<br>
            <input type="email" name="email" id="email"><br>
            Password *<br>
            <input type="password" name="password" id="password"><br>
            <br>
            <input type="submit" name="register" value="Register">
        </div>
 
      </form>
    </div>
</div>
@endsection