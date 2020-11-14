@extends("home")
@section("content")

	<div class="container mt-5">

		<table class="table table-border table-hover table-striped">
			<tr>
				<td>ID</td>
				<td>NAME</td>
				<td>SURNAME</td>
				<td>POSITION</td>
				<td>PHONE</td>
				<td>IS_HIRED</td>
				<td></td>
			</tr>
			@foreach($applicants as $applicant)
			<tr>
				<td>{{ $applicant->id }}</td>
				<td>{{ $applicant->name }}</td>
				<td>{{ $applicant->surname }}</td>
				<td>{{ $applicant->position }}</td>
				<td>{{ $applicant->phone }}</td>

			</tr>
			@endforeach
		</table>
	</div>
@endsection
