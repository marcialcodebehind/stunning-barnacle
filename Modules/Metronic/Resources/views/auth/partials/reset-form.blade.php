<!-- BEGIN FORGOT PASSWORD FORM -->
<form class="forget-form" role="form" method="POST" action="{{ url('/password/email') }}">
	{{ csrf_field() }}
	<h3>Forget Password ?</h3>
	<p>
		 Enter your e-mail address below to reset your password.
	</p>
	<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
		<div class="input-icon">
			<i class="fa fa-envelope"></i>
			<input class="form-control placeholder-no-fix" id="email" type="text" value="{{ old('email') }}"  autocomplete="off" placeholder="Email" name="email"/>
			@if ($errors->has('email'))
                <span class="help-block">
                    {{ $errors->first('email') }}
                </span>
            @endif
		</div>
	</div>
	<div class="form-actions">
		<button type="button" id="back-btn" class="btn">
		<i class="m-icon-swapleft"></i> Back </button>
		<button type="submit" class="btn blue pull-right">
		Submit <i class="m-icon-swapright m-icon-white"></i>
		</button>
	</div>
</form>
<!-- END FORGOT PASSWORD FORM -->