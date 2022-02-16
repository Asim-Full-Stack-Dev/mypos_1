@extends('master.template')
@section('content')


<br><br>
<div class="container">
@if (session('status'))
<h6 class="alert alert-success">{{session('status')}}</h6>
@endif
                    <form action="{{ url('update_expense/'.$expense_trackers->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-header"><strong> Edit Expense Tracker</strong><small> Form</small></div>
                            <div class="card-body card-block">
                                <div class="row form-group">
                                <div class="col-8">
                                    <div class="form-group"><label for="city" class=" form-control-label">Name</label><input type="text" name="name" value="{{$expense_trackers->name}}" placeholder="Name" class="form-control"></div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group"><label for="postal-code" class=" form-control-label">Amount</label><input type="text" name="amount" value="{{$expense_trackers->amount}}"  placeholder="Amount" class="form-control"></div>
                                </div>
                                
                                <div class="col-8">
                                    <div class="form-group"><label for="postal-code" class=" form-control-label">Date</label><input type="date" name="date" value="{{$expense_trackers->date}}"  placeholder="Date" class="form-control"></div>
                                </div>
                                <div class="col-8">
                                        <div class="form-group"><label for="textarea-input" class=" form-control-label">Note</label></div>
                                        <div class="form-group"><textarea name="note" value="{{$expense_trackers->note}}" id="textarea-input" rows="5" placeholder="Note..." class="form-control"></textarea></div>
                                    </div>
                                </div>
                                
                                
                            <div class="form-actions form-group"><button type="submit" class="btn btn-primary btn-sm">Update</button></div>
                            </div>
                        </div>
                    </form>
</div>















@endsection