@extends('supplierpages.supplierlayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
          <h1>Supplier</h1>
         
          @foreach ($supplierData as $supplierData)
           {{$supplierData->farmName}}
           {{$supplierData->address}}

           <form action="/supplier/profile/update" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            Your Name *<br>
            <input type="text" name="name" id="name" value="{{$supplierData->name}}"><br>
        
            Phone No *<br>
            <input type="text" name="phoneNo" id="phoneNo" value="{{$supplierData->phoneNo}}"><br>

            <input type="submit" name="save" value="Save Changes">
           </form>
           <br>
           @include('inc.messages')

          @endforeach
        </div>
    </div>
</div>
@endsection
