<section>

    <form method="post" action="{{ route('password.update') }}" class="mt-3 space-y-6">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-sm-4">
                <div class="mb-3">
                    <label for="update_password_current_password" class="form-label">Current Password</label>
                    <x-text-input id="update_password_current_password" type="password" class="form-control" name="current_password" autocomplete="current-password" />
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>
                <div class="mb-3">
                    <label for="update_password_password" class="form-label">New Password</label>
                    <x-text-input id="update_password_password" type="password" class="form-control" name="password" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>
                <div class="mb-3">
                    <label for="update_password_password_confirmation" class="form-label">Confirm Password</label>
                    <x-text-input id="update_password_password_confirmation" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
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
