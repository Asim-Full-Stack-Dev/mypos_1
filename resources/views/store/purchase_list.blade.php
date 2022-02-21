@extends('layouts.store_layout')
@section('content')


<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3 centre">
                        <h4 class="page-title">Purchase List</h4>
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
										<th>Image</th>
										<th>P-Code</th>
										<th>P-Name</th>
										<th>P-Size</th>
                                        <th>P-Color</th>
                                        <th>P-Price</th>
										<th>Quantity</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>



								@foreach ($purchases as $item)
									<tr class="table-active">
										<td>{{ $item->p_name }}</td>
										<td>{{ $item->p_size }}</td>
										<td>{{ $item->p_color }}</td>
				             			<td>{{ $item->p_price }}</td>
				         				<td>{{ $item->p_quantity }}</td>
                                        <td>{{ $item->p_code }}</td>
                                        <td><img src="{{ asset('uploads/purchase/'.$item->image) }}" width="100px" height="100px" alt="Image"></td>

                                        <td><a href="{{ url('edit_purchase/'.$item->id) }}";><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
				         				-<a href="{{ url('delete_purchase/'.$item->id) }}";><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
				         			    </td>

				         			</tr>
									@endforeach
                                </tbody>
@endsection()
