@extends('master.template')
@section('content')


<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3 centre">
                        <h4 class="page-title">Store List</h4>
                    </div>
                    
                </div>
				</div>
@if (session('status'))
<h6 class="alert alert-success">{{session('status')}}</h6>
@endif
<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
                                <br>
								<thead>
									<tr>
										<th>Store Name</th>
										<th>Store Location</th>
										<th>Postal_Code</th>
										<th>Country</th>
										<th>Service</th>
                                        <th>Currency</th>
										<th>Website</th>
                                        <th>Facebook</th>
										<th>Instagram</th>
										<th>YouTube</th>
										<th>Google</th>
                                        <th>Linked IN</th>
                                        <th>Action</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

								@foreach ($stores as $item)
									<tr class="table-active">
										<td>{{ $item->name }}</td>
										<td>{{ $item->store_location }}</td>
										<td>{{ $item->postal_code }}</td>
										<td>{{ $item->country }}</td>
				             			<td>{{ $item->service }}</td>
				         				<td>{{ $item->currency }}</td>
                                         <td>{{ $item->website }}</td>
										<td>{{ $item->facebook }}</td>
										<td>{{ $item->insta }}</td>
				             			<td>{{ $item->youtube }}</td>
				         				<td>{{ $item->google }}</td>
                                         <td>{{ $item->linkedin }}</td>
                                        <td><a href="{{ url('edit_store/'.$item->id) }}";><button type="button" class="btn btn-primary btn-sm">Edit</button></a>  </td>
                                         <td><a href="{{ url('delete_store/'.$item->id) }}";><button type="button" class="btn btn-danger btn-sm">Delete</button></a></td>
				         			</tr>
								@endforeach
								
								

                                

                                </tbody>


@endsection()