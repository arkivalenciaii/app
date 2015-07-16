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
										<label class="control-label" for="userName">User Name</label>
										<input type="text" class="form-control" id="userName" placeholder="User Name">
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="control-label" for="passWord">Enter Password</label>
										<input type="password" class="form-control" id="passWord" placeholder="Password">
										<i class="fa fa-unlock form-control-feedback"></i>
									</div>
									<input type="submit" value="Login" class="btn btn-yellow btn-shadow btn-lg btn-block">
								</form>
								<a href="register" class="underline text-yellow">No account yet?</a>
							</div>
						</div>
					</div>
					<!-- Login Container Ends -->
				</div>
			</div>
			<!-- Row Ends -->

		</div>

@endsection
