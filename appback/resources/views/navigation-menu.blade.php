<nav x-data="{ open: false }" class="navbar navbar-expand-lg navbar-light bg-body-tertiary border-b border-gray-100 fixed-top">
    <!-- Primary Navigation Menu -->
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="{{ route('dashboard') }}">
            <x-application-mark class="block h-9 w-auto" />
        </a> --}}

        <button @click="open = ! open" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link href="{{ route('all.category') }}">
                        {{ __('All category') }}
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link href="{{ route('all.brand') }}">
                        {{ __('Brand') }}
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link href="{{ route('multi.image') }}">
                        {{ __('Multi Image') }}
                    </x-nav-link>
                </li>
            </ul>

            <div class="ms-auto">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ms-3 dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="teamsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->currentTeam->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="teamsDropdown">
                            <!-- Team Settings -->
                            <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                {{ __('Team Settings') }}
                            </x-dropdown-link>
                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('Create New Team') }}
                                </x-dropdown-link>
                            @endcan
                            <!-- Team Switcher -->
                            @if (Auth::user()->allTeams()->count() > 1)
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-header">{{ __('Switch Teams') }}</div>
                                @foreach (Auth::user()->allTeams() as $team)
                                    <x-switchable-team :team="$team" component="dropdown-item" />
                                @endforeach
                            @endif
                        </ul>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ms-3 dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="settingsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        @else
                            {{ Auth::user()->name }}
                        @endif
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingsDropdown">
                        <!-- Account Management -->
                        <x-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-dropdown-link>
                        @endif
                        <div class="dropdown-divider"></div>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    {{-- <div :class="{'block': open, 'hidden': ! open}" class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </ul> --}}

        <!-- Responsive Settings Options -->
        {{-- <ul class="navbar-nav navbar navbar-expand-lg">
            <li class="nav-item">
                <div class="flex items-center px-4 py-3">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <img class="h-8 w-8 rounded-full object-cover me-2" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    @endif
                    <div>
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
            </li>
            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <li class="nav-item">
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                </li>
            @endif
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </li>
        </ul> --}}
    </div>
</nav>
