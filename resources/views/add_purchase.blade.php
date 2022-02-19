@extends('master.template')
@section('content')


    <br><br>
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="container">
                    @if (session('status'))
                        <h6 class="alert alert-success">{{session('status')}}</h6>
                    @endif
                    <form action="{{ url('add_purchase') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body card-block">
                            <div class="card-header text-center"><strong>ADD PURCHASE</strong><small> Form</small></div>
                        </div>
                        <div class="card-body card-block">
                            <div class="row form-group">
                                <div class="col-6">
                                    <div class="form-group"><label for="company" class=" form-control-label">Product
                                            Name</label><input type="text" name="p_name" placeholder="Product Name"
                                                               class="form-control"></div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group"><label for="vat" class=" form-control-label">Product
                                            Size</label><input type="text" id="vat" name="p_size"
                                                               placeholder="Product Size" class="form-control"></div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-6">
                                    <div class="form-group"><label for="street" class=" form-control-label">Product
                                            Color</label><input type="text" id="street" name="p_color"
                                                                placeholder="Product Color" class="form-control"></div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group"><label for="city" class=" form-control-label">Purchase
                                            Price</label><input type="text" id="city" name="p_price"
                                                                placeholder="Purchase Price" class="form-control"></div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-6">
                                    <div class="form-group"><label for="postal-code" class=" form-control-label">Quantity</label><input
                                            type="text" id="postal-code" name="p_quantity" placeholder="Quantity"
                                            class="form-control"></div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group"><label for="country" class=" form-control-label">Product
                                            Code</label><input type="text" id="country" name="p_code"
                                                               placeholder="Product Code" class="form-control"></div>
                                </div>
                            </div>
                            <div class="form-group"><label for="File input" class=" form-control-label">Product
                                    Image</label><input type="file" id="image" name="image" class="form-control"></div>

                            <div class="form-actions form-group text-center">
                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
