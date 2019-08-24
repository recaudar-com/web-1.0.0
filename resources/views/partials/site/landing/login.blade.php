<!-- modal -->
<div class="modal fade bd-example-modal-lg xs-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="fundpress-tab-nav-v5">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" href="#login" role="tab" data-toggle="tab">
							Login
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#signup" role="tab" data-toggle="tab">
							Signup
						</a>
					</li>
				</ul>
			</div><!-- fundpress-tab-nav-v3 -->
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fadeInRights show fade in active" id="login">
					<form method="POST" action="{{ route('login') }}" >
						@csrf

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
							<input id="email" type="email"
								class="form-control @error('email') is-invalid @enderror xs-input-control"
								name="email" value="{{ old('email') }}" required autocomplete="email"
								autofocus placeholder="Ingresa tu Email">
						</div>
						<div class="xs-input-group-v2">
							<i class="icon icon-key2"></i>
							<input id="password" type="password"
								class="form-control @error('password') is-invalid @enderror xs-input-control" name="password"
								required autocomplete="current-password" placeholder="Ingresa tu password">
						</div>
						<div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
						<div class="xs-submit-wraper xs-mb-20">
							<input type="submit" name="submit" value="{{ __('Login') }}" id="xs_contact_get_action" class="btn btn-warning btn-block">
						</div>
						@if (Route::has('password.request'))
							<a class="btn btn-link" href="{{ route('password.request') }}">
								{{ __('Forgot Your Password?') }}
							</a>
						@endif
						{{-- <p class="xs-mb-20">or</p>
						<div class="xs-submit-wraper xs-mb-20">
							<input type="submit" name="submit" value="Login with facebook account" id="xs_facebook" class="btn btn-info btn-block">
						</div>
						<div class="xs-submit-wraper">
							<input type="submit" name="submit" value="Login with twitter account" id="xs_twitter" class="btn btn-success btn-block">
						</div> --}}
					</form>
				</div><!-- tab-pane -->
			</div><!-- tab-content -->
		</div>
	</div>
</div>
<!-- End modal --><!-- End home section -->