<x-auth-layout title="Reset Password">
	<x-slot name="cover_image">
		{{ _('https://images.pexels.com/photos/7534784/pexels-photo-7534784.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500') }}
	</x-slot>
	<x-slot name="cover_image_alt">
		{{ _('Man in grey-collar shirt ') }}
	</x-slot>
	<div class="uk-text-center">
		<x-laravel-logo />
		<h2 class="uk-text-muted">{{ __('Reset Password?') }}</h2>
		<p>
			{{ __('Dont worry. You can now reset your password') }}
		</p>
	</div>

	<form method="POST" action="{{ route('password.update') }}">
		@csrf

		<input type="hidden" name="token" value="{{ $request->route('token')}}">
		<div class="uk-margin">
			<label class="uk-form-label">{{ __('Email') }}</label>

			<div class="uk-width-1-1">
				<div class="uk-inline uk-width-1-1">
					<span class="uk-form-icon" uk-icon="icon: mail"></span>
					<input class="uk-input @error('email') uk-form-danger @enderror" type="email" name="email"
						value="{{ old('email', $request->email) }}" required autofocus />
				</div>

				@error('email')
					<x-alert type="danger" :message="$message"></x-alert>
				@enderror
			</div>
		</div>

		<div class="uk-margin">
			<label class="uk-form-label">{{ __('Password') }}</label>

			<div class="uk-width-1-1">
				<div class="uk-inline uk-width-1-1">
					<span class="uk-form-icon" uk-icon="icon: lock"></span>
					<input class="uk-input @error('password') uk-form-danger  @enderror" type="password" name="password" required autocomplete="new-password" />
				</div>

				@error('password')
					<x-alert type="danger" :message="$message"></x-alert>
				@enderror
			</div>
		</div>

		<div class="uk-margin">
			<label class="uk-form-label">{{ __('Confirm Password') }}</label>

			<div class="uk-width-1-1">
				<div class="uk-inline uk-width-1-1">
					<span class="uk-form-icon" uk-icon="icon: check"></span>
					<input class="uk-input @error('password_confirmation') uk-form-danger  @enderror" type="password"
						name="password_confirmation" required autocomplete="new-password" />
				</div>

				@error('password_confirmation')
					<x-alert type="danger" :message="$message"></x-alert>
				@enderror
			</div>
		</div>

		<div class="uk-margin uk-text-center">
			<x-auth-button>
				{{ __('Reset Password') }}
			</x-auth-button>
		</div>
	</form>

	<div class="uk-margin-medium-top uk-margin-remove-bottom uk-text-center uk-flex uk-flex-center">
		<div class="uk-text-meta">
			<a href="{{ route('login') }}" class="uk-text-primary uk-link-text">
				<small class="uk-text-small">{{ __('Back to login') }}</small>
			</a>
		</div>
	</div>
</x-auth-layout>
