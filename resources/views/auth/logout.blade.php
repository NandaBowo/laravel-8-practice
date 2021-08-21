@extends('layouts.main')

@section('contents')
	<div class="row justify-content-center mt-5">
		<div class="col-lg-3">
			<div class="card text-center">
				<div class="card-body">
					<h5 class="card-title">Want to logout?</h5>
					<div class="row">
						<div class="col">
							<a href="/" class="btn btn-sm btn-secondary">Back</a>
						</div>
						<div class="col">
							<form action="/logout" method="post">
								@csrf
								<button type="submit" class="btn btn-sm btn-danger">Logout</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection