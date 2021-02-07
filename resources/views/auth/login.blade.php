<x-admin-login-master title="Admin Panel">

@section('content')


<form method="POST"  class="frm-single" action="{{ route('login') }}">
                        @csrf
		<div class="inside">
			<div class="title"><strong>Admin</strong> Panel</div>
			<!-- /.title -->
			<div class="frm-title">Login</div>
			<!-- /.frm-title -->
			<div class="frm-input"><input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Username" class="frm-inp @error('email') is-invalid @enderror" required autocomplete="email" autofocus><i class="fa fa-user frm-ico"></i>
			
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			</div>
			<!-- /.frm-input -->
			<div class="frm-input"><input id="password" name="password"  type="password" placeholder="Password" class="frm-inp @error('password') is-invalid @enderror" required autocomplete="current-password"><i class="fa fa-lock frm-ico"></i>
			  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			</div>
			<!-- /.frm-input -->
			<div class="clearfix margin-bottom-20">
				<div class="float-left">
					<div class="checkbox primary"><input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><label for="remember">{{ __('Remember Me') }}</label></div>
					<!-- /.checkbox -->
				</div>
				<!-- /.float-left -->
				<div class="float-right">
				 @if (Route::has('password.request'))
                                    <a href="#" class="a-link" href="{{ route('password.request') }}">
                                        <i class="fa fa-unlock-alt"></i>{{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
			
				</div>
				<!-- /.float-right -->
			</div>
			<!-- /.clearfix -->
			<button type="submit" class="frm-submit"> {{ __('Login') }}<i class="fa fa-arrow-circle-right"></i></button>
			<div class="row small-spacing">
				<div class="col-md-12">
					<div class="txt-login-with txt-center">or login with</div>
					<!-- /.txt-login-with -->
				</div>
				
			</div>
			<!-- /.row -->
			<a href="{{ route('register') }}" class="a-link"><i class="fa fa-key"></i>Register.</a>
			<div class="frm-footer">Copyright © {{config('app.name')}} © {{date('Y')}}.</div>
			<!-- /.footer -->
		</div>
		<!-- .inside -->
	</form>

@endsection
   </x-admin-login-master>
