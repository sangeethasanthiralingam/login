<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="container">
        @csrf

        <!-- Name -->
        <div class="form-group">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="form-group mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="form-group mt-4">
            <div class="form-group mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <div class="input-group">
                    <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <input type="checkbox" onclick="togglePasswordVisibility('password')" class="form-check-input">
                            <label class="form-check-label" for="showPassword">{{ __('Show Password') }}</label>
                        </div>
                    </div>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

        </div>

        <!-- Confirm Password -->
        <div class="form-group mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <div class="input-group">
                <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                <div class="input-group-append">
                    <div class="input-group-text">
                        <input type="checkbox" onclick="togglePasswordVisibility('password_confirmation')" class="form-check-input">
                        <label class="form-check-label" for="showPasswordConfirmation">{{ __('Show Password') }}</label>
                    </div>
                </div>
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>


        <!-- User Type -->
        <div class="form-group mt-4">
            <x-input-label for="type" :value="__('User Type')" />
            <select id="type" name="type" class="form-control">
                <option value="seller">Seller</option>
                <option value="customer">Customer</option>
            </select>
            <x-input-error :messages="$errors->get('type')" class="mt-2" />
        </div>

        <div class="d-flex justify-content-between align-items-center mt-4">
            <a class="text-decoration-none text-muted" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</x-guest-layout>
<script>
    function togglePasswordVisibility(fieldId) {
        const field = document.getElementById(fieldId);
        if (field.type === "password") {
            field.type = "text";
        } else {
            field.type = "password";
        }
    }
</script>