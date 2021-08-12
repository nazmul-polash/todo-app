@extends('backend.template.template')

@section('content')

	<div class="br-pagetitle">
		<i class="icon ion-ios-home-outline tx-70 lh-0"></i>
		<div>
			<h4>Manage All Task</h4>
		</div>
	</div><!-- d-flex -->

<div class="br-pagebody">
	<div class="br-section-wrapper">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped">
					<thead class="thead-dark">
						<tr>
							<th scope="col">Serial</th>
							<th scope="col">Task Name</th>
							<th scope="col">Task Details</th>
							<th scope="col">Status</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>

						@php $i = 1; @endphp
						@foreach ( $tasks as $task )
						<tr>
							<th scope="row">{{ $i }}</th>
							<td>{{$task->name}}</td>
							<td>{{$task->description}}</td>
							<td>
								@if ( $task->status == 1 )
									<span class="badge badge-success">Active</span>
								@elseif ( $task->status == 2 )
									<span class="badge badge-danger">Inactive</span>
								@endif
							</td>
							<td>
								<div class="action-panel">
									<ul>
										<li>
											<a href="{{ route('task.edit',$task->id) }}"><i class="far fa-edit"></i></a>
										</li>
										<li>
											<a href=""><i class="far fa-eye"></i></a>
										</li>
										<li>
											<a href="" data-toggle="modal" data-target="#delete{{ $task->id }}"><i class="far fa-trash-alt"></i></a>
										</li>
									</ul>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="delete{{ $task->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Are You Sure Delete This Task???</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-footer">
								      	<a href="{{ route('task.destroy',$task->id) }}" class="btn btn-danger">Confirm</a>
								      	<a href="" class="btn btn-success">Chancel</a>
								      </div>
								    </div>
								  </div>
								</div>
								<!-- Model end -->
							</td>
						</tr>
						@php $i++; @endphp
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</div>

@endsection