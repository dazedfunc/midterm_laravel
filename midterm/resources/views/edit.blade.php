@extends("home")
@section("content")

	<div class="container mt-5">
		<form method="post">

			@if ($errors->any())
	    <div>
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

			<div class="form-group">
				<input type="text" placeholder="enter name" name="name" value="{{ $applicant->name }}" class="form-control">
			</div>
			<div class="form-group">
				<input type="text" placeholder="enter surname" name="surname" value="{{ $applicant->surname }}" class="form-control">
			</div>
			<div class="form-group">
				<input type="text" name="position" value="{{ $applicant->position }}" class="form-control">
			</div>
			<div class="form-group">
				<input type="number" placeholder="enter phone number" name="phone" value="{{ $applicant->phone }}" class="form-control">
			</div>
			<div class="form-group">
				@if($applicant->is_hired)
					is hired
				@else
					<a href="/hire/{{ $applicant->id }}">hire</a>
				@endif
			</div>

			<div class="form-group">
				<button name="submit" class="btn btn-success">edit</button>
			</div>
			@csrf
		</form>
	</div>


@endsection
