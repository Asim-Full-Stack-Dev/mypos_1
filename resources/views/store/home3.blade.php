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
   <h5> <label  class="form-label">How did you know about POS?.</label></h5>
    <select id="inputState" class="form-select">
      <option selected>Select Your Answer Here</option>
   <option value="Afganistan">Facebook Page</option>
   <option value="Albania">Instagram</option>
   <option value="Algeria">Facebook Sari-Sari Store Group</option>
   <option value="American Samoa">Youtube</option>
   <option value="Andorra">Reffered By A Friend</option>
   <option value="Andorra">Sponsored Ads On Facebook</option>
   <option value="Andorra">Radio Commercial</option>
   <option value="Andorra">Others</option>
</select>
    </select>
  </div>
  <br>
  <a href="home2" class="previous">&laquo; Prev</a>
  <a href="dashboard" class="next">Next &raquo;</a>
  
  

</div>

</center>




@endsection
