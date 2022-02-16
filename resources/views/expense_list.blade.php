@extends('master.template')
@section('content')


<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3 centre">
                        <h4 class="page-title">Expense Tracker List</h4>
                    </div>
                    
                </div>
				</div>
@if (session('status'))
<h6 class="alert alert-success">{{session('status')}}</h6>
@endif
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
										<th>Name</th>
										<th>Amount</th>
										<th>Date</th>
										<th>Note</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

								@foreach ($expense_trackers as $item)
									<tr class="table-active">
										<td>{{ $item->name }}</td>
										<td>{{ $item->amount }}</td>
										<td>{{ $item->date }}</td>
				             			<td>{{ $item->note }}</td>
                                        <td><a href="{{ url('edit_expense/'.$item->id) }}";><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
				         				-<a href="{{ url('delete_expense/'.$item->id) }}";><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
				         			    </td>
                                         
				         			</tr>
								@endforeach
								
								

                                

                                </tbody>



@endsection()