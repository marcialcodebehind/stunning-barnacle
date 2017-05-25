<!-- BEGIN REGISTRATION FORM -->
<form class="register-form" role="form" method="POST" action="{{ url('/register') }}">
	{{ csrf_field() }}
	<h3>Sign Up</h3>
	<p>
		Enter your account details below:
	</p>
	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		<label class="control-label visible-ie8 visible-ie9">Full Name</label>
		<div class="input-icon">
			<i class="fa fa-font"></i>
			<input class="form-control placeholder-no-fix" type="text" value="{{ old('name') }}" id="name" placeholder="Full Name" name="name"/>
			@if ($errors->has('name'))
                <span class="help-block">
                    {{ $errors->first('name') }}
                </span>
            @endif
		</div>
	</div>
	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
		<label class="control-label visible-ie8 visible-ie9">Email</label>
		<div class="input-icon">
			<i class="fa fa-envelope"></i>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Email Address" name="email"/>
			@if ($errors->has('email'))
                <span class="help-block">
                    {{ $errors->first('email') }}
                </span>
            @endif
		</div>
	</div>
	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		<label class="control-label visible-ie8 visible-ie9">Password</label>
		<div class="input-icon">
			<i class="fa fa-lock"></i>
			<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
			@if ($errors->has('password'))
                <span class="help-block">
                    {{ $errors->first('password') }}
                </span>
            @endif
		</div>
	</div>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
		<div class="controls">
			<div class="input-icon">
				<i class="fa fa-check"></i>
				<input id="password_confirmation" class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="password_confirmation"/>
			</div>
		</div>
	</div>
	<div class="form-actions">
		<button id="register-back-btn" type="button" class="btn">
		<i class="m-icon-swapleft"></i> Back </button>
		<button type="submit" id="register-submit-btn" class="btn blue pull-right">
		Sign Up <i class="m-icon-swapright m-icon-white"></i>
		</button>
	</div>
</form>
<!-- END REGISTRATION FORM -->