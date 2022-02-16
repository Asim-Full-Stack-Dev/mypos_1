@extends('master.template')
@section('content')


<br><br>
<div class="container">
@if (session('status'))
    <h6 class="alert alert-success">{{session('status')}}</h6>
@endif
    <form action="{{ url('update_purchase/'.$purchases->id) }}" method="POST" enctype="multipart/form-data">
     @csrf
     @method('PUT')
        <div class="card-header"><strong>Edit PURCHASE</strong><small> Form</small></div>
            <div class="card-body card-block">
                <div class="form-group"><label for="company" class=" form-control-label">Product Name</label><input type="text"  name="p_name" value="{{$purchases->p_name}}" placeholder="Product Name" class="form-control"></div>
                    <div class="form-group"><label for="vat" class=" form-control-label">Product Size</label><input type="text"  name="p_size" value="{{$purchases->p_size}}" placeholder="Product Size" class="form-control"></div>
                        <div class="form-group"><label for="street" class=" form-control-label">Product Color</label><input type="text"  name="p_color" value="{{$purchases->p_color}}" placeholder="Product Color" class="form-control"></div>
                            <div class="row form-group">
                                <div class="col-8">
                                    <div class="form-group"><label for="city" class=" form-control-label">Purchase Price</label><input type="text"  name="p_price" value="{{$purchases->p_price}}" placeholder="Purchase Price" class="form-control"></div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group"><label for="postal-code" class=" form-control-label">Quantity</label><input type="text"  name="p_quantity" value="{{$purchases->p_quantity}}" placeholder="Quantity" class="form-control"></div>
                                </div>
                                </div>
                                <div class="form-group"><label for="country" class=" form-control-label">Product Code</label><input type="text" name="p_code" value="{{$purchases->p_code}}" placeholder="Product Code" class="form-control"></div>
                                <div class="form-group"><label for="File input" class=" form-control-label">Product Image</label>
                                <input type="file" id="image"  name="image" class="form-control">
                                <img src="{{ asset('uploads/purchase/'.$purchases->image) }}" width="100px" height="100px" alt="Image">
                            </div>
                                <div class="form-actions form-group"><button type="submit" class="btn btn-primary btn-sm">Update Purchase</button></div>
            </div>  
        </div>
    </form>
</div>        
@endsection
