@extends('auth.app')

@section('content')
<div class="container">

			<!-- Row Starts -->
			<div class="row">
				<div class="col-md-4 col-md-offset-8">
					<!-- Login Container Starts -->
					<div class="login-container">
						<div class="login-wrapper">
							<div id="login" class="show">
								<div class="login-header">
									<h4>Login to your Account <i class="fa fa-flight"></i> </h4>
								</div>
								<form method="POST" action="{{ url('/auth/login') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="form-group has-feedback">
										<label class="control-label" for="userName">First Name</label>
										<input type="text" class="form-control" id="userName"
										 name="first_name" placeholder="{{ old('first_name')}}">
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="control-label" for="userName">Last Name</label>
										<input type="text" class="form-control" id="userName"
										 name="last_name" placeholder="{{ old('last_name')}}">
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="control-label" for="userName">Email</label>
										<input type="text" class="form-control" id="userName"
										 name="email" placeholder="{{ old('email')}}">
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="control-label" for="passWord">Enter Password</label>
										<input type="password" class="form-control" id="passWord" name=
										"password" placeholder="Password">
										<i class="fa fa-unlock form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="control-label" for="passWord">Confirm Password</label>
										<input type="password" class="form-control" id="passWord" name=
										"password_confirmaton" placeholder="Confirm Password">
										<i class="fa fa-unlock form-control-feedback"></i>
									</div>
									<input type="submit" value="Register Now" class="btn btn-yellow btn-shadow btn-lg btn-block">
								</form>
								<a href="login" class="underline text-yellow">Already have account?</a>
							</div>
						</div>
					</div>
					<!-- Login Container Ends -->
				</div>
			</div>
</div>
@endsection

