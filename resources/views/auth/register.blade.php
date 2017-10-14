@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="card">
					<div class="card-header">Register</div>

					<div class="card-block">
						<form class="form-horizontal" method="POST" action="{{ route('register') }}">
							{{ csrf_field() }}

							<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} row">
								<label for="name" class="col-md-4 form-control-label text-right">Name</label>

								<div class="col-md-6">
									<input id="name" type="text" class="form-control" name="name"
									       value="{{ old('name') }}" required autofocus>

									@if ($errors->has('name'))
										<span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
								<label for="email" class="col-md-4 form-control-label text-right">E-Mail Address</label>

								<div class="col-md-6">
									<input id="email" type="email" class="form-control" name="email"
									       value="{{ old('email') }}" required>

									@if ($errors->has('email'))
										<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
								<label for="password" class="col-md-4 form-control-label text-right">Password</label>

								<div class="col-md-6">
									<input id="password" type="password" class="form-control" name="password" required>

									@if ($errors->has('password'))
										<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="password-confirm" class="col-md-4 form-control-label text-right">
									Confirm Password
								</label>

								<div class="col-md-6">
									<input id="password-confirm" type="password" class="form-control"
									       name="password_confirmation" required>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary">
										Register
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
