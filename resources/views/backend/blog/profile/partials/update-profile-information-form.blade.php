<section>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="row">
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <x-text-input id="name" type="text" class="form-control" name="name" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Slug</label>
                    <x-text-input id="email" type="email" class="form-control" name="email" :value="old('email', $user->email)" required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p>
                            {{ __('Your email address is unverified.') }}

                            <button form="send-verification">{{ __('Click here to re-send the verification email.') }}</button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p>{{ __('A new verification link has been sent to your email address.') }}</p>
                        @endif
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <x-primary-button type="submit" class="btn btn-primary" disabled>Save</x-primary-button>

                @if (session('status') === 'profile-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400"
                    >{{ __('Saved.') }}</p>
                @endif
            </div>
        </div>
    </form>
</section>
