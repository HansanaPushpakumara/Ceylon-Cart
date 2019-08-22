@extends('supplierpages.supplierlayout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <a href="/supplier/editprofile">Update Profile</a>
    </div>
  </div>
    <div class="row">
        <div class="col-sm-12">
          <h1>Supplier</h1>
         
          @foreach ($supplierData as $supplierData)
           {{$supplierData->farmName}}
          @endforeach
        </div>
    </div>
</div>
@endsection
