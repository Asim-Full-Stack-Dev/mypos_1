@extends('master.template')
@section('content')


<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3 centre">
                        <h4 class="page-title">Stock List</h4>
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
										<th>Total Item</th>
										<th>Total Price</th>
										<th>Deposit</th>
										<th>Balnace</th>
										<th>Vendor</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

								@foreach ($stocks as $item)
									<tr class="table-active">
										<td>{{ $item->total_item }}</td>
										<td>{{ $item->total_price }}</td>
										<td>{{ $item->deposit }}</td>
				             			<td>{{ $item->balance }}</td>
				         				<td>{{ $item->vendor }}</td>
                                        <td><a href="{{ url('edit_stock/'.$item->id) }}";><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
				         				-<a href="{{ url('delete_stock/'.$item->id) }}";><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
				         			    </td>
                                         
				         			</tr>
								@endforeach
								
								

                                

                                </tbody>



@endsection()