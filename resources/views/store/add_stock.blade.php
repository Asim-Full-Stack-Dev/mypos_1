@extends('layouts.store_layout')
@section('content')

    <br><br>
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="container">
                        @if (session('status'))
                            <h6 class="alert alert-success">{{session('status')}}</h6>
                        @endif
                        <form action="{{ url('add_stock') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body card-block">
                                <div class="card-header text-center"><strong>ADD STOCK</strong><small> Form</small>
                                </div>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="company" class=" form-control-label">Total
                                        Item</label><input type="text" name="total_item" placeholder="Total Item"
                                                           class="form-control"></div>
                                <div class="form-group"><label for="vat" class=" form-control-label">Total Price</label><input
                                        type="text" name="total_price" placeholder="Total Price" class="form-control">
                                </div>
                                <div class="form-group"><label for="street"
                                                               class=" form-control-label">Deposit</label><input
                                        type="text" name="deposit" placeholder="Deposit" class="form-control"></div>
                                <div class="form-group"><label for="city"
                                                               class=" form-control-label">Balnace</label><input
                                        type="text" name="balance" placeholder="Balnace" class="form-control"></div>
                                <div class="form-group"><label for="postal-code"
                                                               class=" form-control-label">Vendor</label><input
                                        type="text" name="vendor" placeholder="Vendor" class="form-control"></div>


                                <div class="form-actions form-group text-center">
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
