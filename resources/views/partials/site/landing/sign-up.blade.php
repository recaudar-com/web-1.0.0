<!-- modal -->
<div class="modal fade register-modal xs-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="fundpress-tab-nav-v5">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" href="#signup" role="tab" data-toggle="tab">
							Signup
						</a>
					</li>
				</ul>
			</div>
			<form  method="POST" action="{{ route('register') }}" id="xs-register-form">
					@csrf
					@error('name')
					<div class="xs-input-group-v2 alert alert-danger">
						<span class="text-danger" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					</div>
					@enderror
					@error('email')
					<div class="xs-input-group-v2 alert alert-danger">
						<span class="text-danger" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					</div>
					@enderror
					@error('password')
					<div class="xs-input-group-v2 alert alert-danger">
						<span class="text-danger" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					</div>
					@enderror
					<div class="xs-input-group-v2">
						<i class="icon icon-profile-male"></i>
						<input id="name" type="text" class="form-control xs-input-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Tu nombre">
					</div>
					<div class="xs-input-group-v2">
						<i class="icon icon-envelope2"></i>
						<input  id="email" type="email" class="form-control xs-input-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Tu email">
					</div>
					<div class="xs-input-group-v2">
						<i class="icon icon-key2"></i>
						<input id="password" type="password" class="form-control xs-input-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Tu password">
					</div>
					<div class="xs-input-group-v2">
						<i class="icon icon-key2"></i>
						<input id="password-confirm" type="password" class="form-control xs-input-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repite tu password">
					</div>
					<div class="xs-submit-wraper xs-mb-20">
						<input type="submit" name="submit" value="{{ __('Register') }}" id="xs_register_get_action" class="btn btn-warning btn-block">
					</div>
					{{-- <p class="xs-mb-20">or</p>
					<div class="xs-submit-wraper xs-mb-20">
						<input type="submit" name="submit" value="Login with facebook account" id="xs_register_facebook" class="btn btn-info btn-block">
					</div>
					<div class="xs-submit-wraper">
						<input type="submit" name="submit" value="Login with twitter account" id="xs_register_twitter" class="btn btn-success btn-block">
					</div> --}}
				</form>
		</div>
	</div>
</div>
<!-- End modal --><!-- End home section -->