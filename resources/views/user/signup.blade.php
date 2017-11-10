@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1>Sign Up</h1>
			@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $error)
						<p>{{ $error }}</p>
					@endforeach
				</div>
			@endif
			<form action="{{ route('user.signup') }}" method="POST">
				<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
					<label for="email">E-mail</label>
					<input type="text" name="email" id="email" class="form-control">
				</div>
				<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary">Sign Up</button>
				{{ csrf_field() }}
			</form>
		</div>	
	</div>
@endsection

