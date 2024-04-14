<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="container py-10">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    <div class="mb-5">
                        @livewire('profile.update-profile-information-form')
                    </div>

                    <hr class="mb-5" />
                @endif

                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="mb-5">
                        @livewire('profile.update-password-form')
                    </div>

                    <hr class="mb-5" />
                @endif

                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class="mb-5">
                        @livewire('profile.two-factor-authentication-form')
                    </div>

                    <hr class="mb-5" />
                @endif

                <div class="mb-5">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>

                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <hr class="mb-5" />

                    <div class="mb-5">
                        @livewire('profile.delete-user-form')
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
