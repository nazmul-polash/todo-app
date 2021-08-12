@extends('backend.template.template')

@section('content')
<div class="br-pagetitle">
	<i class="icon ion-ios-home-outline tx-70 lh-0"></i>
	<div>
		<h4>Update the Task</h4>
	</div>
</div><!-- d-flex -->

<div class="br-pagebody">
	<div class="br-section-wrapper">
		<div class="row">
			<div class="col-md-6 offset-3">
				
				<form action="{{ route('task.update',$task->id) }}" method="POST">
					@csrf
					<div class="mb-3">
						<label for="">Task Name</label>
						<input type="text" name="name" class="form-control" value="{{ $task->name }}">
					</div>
					<div class="mb-3">
						<label for="">Task Description</label>
						<textarea name="description" class="form-control" rows="4" >{{ $task->description }}</textarea>
					</div>
					<div class="mb-3">
						<label for="">Task Status</label>
						<select name="status" class="form-control">
							<option value="">Please Select The Status</option>
							<option value="1" @if ( $task->status==1 ) selected @endif >Active</option>
							<option value="2" @if ( $task->status==2 ) selected @endif >Inactive</option>
						</select>
					</div>
					<div class="mb-3">
						<input type="submit" name="save" class="btn btn-success btn-block" value="Update the Task">
					</div>
				</form>

			</div>
		</div>
	</div>
	
</div>

@endsection