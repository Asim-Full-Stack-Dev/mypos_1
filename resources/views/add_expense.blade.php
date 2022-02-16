@extends('master.template')
@section('content')


<br><br>
<div class="container">
@if (session('status'))
<h6 class="alert alert-success">{{session('status')}}</h6>
@endif
                    <form action="{{ url('add_expense') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header"><strong>Expense Tracker</strong><small> Form</small></div>
                            <div class="card-body card-block">
                                <div class="row form-group">
                                <div class="col-8">
                                    <div class="form-group"><label for="city" class=" form-control-label">Name</label><input type="text" name="name"  placeholder="Name" class="form-control"></div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group"><label for="postal-code" class=" form-control-label">Amount</label><input type="text" name="amount"  placeholder="Amount" class="form-control"></div>
                                </div>
                                
                                <div class="col-8">
                                    <div class="form-group"><label for="postal-code" class=" form-control-label">Date</label><input type="date" name="date"  placeholder="Date" class="form-control"></div>
                                </div>
                                <div class="col-8">
                                        <div class="form-group"><label for="textarea-input" class=" form-control-label">Note</label></div>
                                        <div class="form-group"><textarea name="note" id="textarea-input" rows="5" placeholder="Note..." class="form-control"></textarea></div>
                                    </div>
                                </div>
                                
                                
                            <div class="form-actions form-group"><button type="submit" class="btn btn-primary btn-sm">Submit</button></div>
                            </div>
                        </div>
                    </form>
</div>















@endsection