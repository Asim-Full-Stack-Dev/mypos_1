@extends('layouts.store_layout')
@section('content')


<br><br>
<div class="container">
@if (session('status'))
<h6 class="alert alert-success">{{session('status')}}</h6>
@endif
                    <form action="{{ url('update_stock/'.$stocks->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-header"><strong>EDIT STOCK</strong><small> Form</small></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="company" class=" form-control-label">Total Item</label><input type="text" name="total_item" value="{{$stocks->total_item}}"  placeholder="Total Item" class="form-control"></div>
                                <div class="form-group"><label for="vat" class=" form-control-label">Total Price</label><input type="text" name="total_price" value="{{$stocks->total_price}}"  placeholder="Total Price" class="form-control"></div>
                                <div class="form-group"><label for="street" class=" form-control-label">Deposit</label><input type="text" name="deposit" value="{{$stocks->deposit}}" placeholder="Deposit" class="form-control"></div>
                                <div class="row form-group">
                                <div class="col-8">
                                    <div class="form-group"><label for="city" class=" form-control-label">Balnace</label><input type="text" name="balance" value="{{$stocks->balance}}"  placeholder="Balnace" class="form-control"></div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group"><label for="postal-code" class=" form-control-label">Vendor</label><input type="text" name="vendor" value="{{$stocks->vendor}}"  placeholder="Vendor" class="form-control"></div>
                                </div>
                                </div>

                            <div class="form-actions form-group"><button type="submit" class="btn btn-primary btn-sm">Update</button></div>
                            </div>
                        </div>
                    </form>
</div>















@endsection
