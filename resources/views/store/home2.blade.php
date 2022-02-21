@extends('layouts.app')

@section('content')
<br><br>
<center><h1>
Let's build your POS's aap!</h1></center>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">
<br>
<center>
<div class="container">
<div class="col-md-4">
   <h5> <label  class="form-label">Tell us more about your Business.</label></h5>
    <select id="inputState" class="form-select">
      <option selected>Select Business Type</option>
   <option value="Afganistan">Sari-Sari Store</option>
   <option value="Albania">Online Store (Food & Non-Food)</option>
   <option value="Algeria">Home-Based Online Food Seller</option>
   <option value="American Samoa">Home-Based Online Non-Food Seller</option>
   <option value="Andorra">Restaurant</option>
   <option value="Andorra">Milk Tea Shop</option>
   <option value="Andorra">Food Stall</option>
   <option value="Andorra">Drink/Juice Shop</option>
   <option value="Andorra">Others</option>
</select>
    </select>
  </div>
  <br>
  <a href="home1" class="previous">&laquo; Prev</a>
  <a href="home3" class="next">Next &raquo;</a>
  
  

</div>

</center>




@endsection
