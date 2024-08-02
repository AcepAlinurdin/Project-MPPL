<nav x-data="{ open: false }" class="bg-red-800 dark:bg-red-900 border-b border-gray-200 dark:border-gray-600">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('images/logo.jpg') }}" class="block h-9 w-auto" alt="Logo">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="hover:text-white transition-colors duration-300 text-gray-100">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('pemesanan')" :active="request()->routeIs('pemesanan')" class="hover:text-white transition-colors duration-300 text-gray-100">
                        {{ __('Pemesanan') }}
                    </x-nav-link>
                    <x-nav-link :href="route('artikel')" :active="request()->routeIs('artikel')" class="hover:text-white transition-colors duration-300 text-gray-100">
                        {{ __('Artikel') }}
                    </x-nav-link>
                    <x-nav-link :href="route('notifikasi')" :active="request()->routeIs('notifikasi')" class="hover:text-white transition-colors duration-300 text-gray-100">
                        {{ __('Status') }}
                    </x-nav-link>
                </div>
            </div>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @if(Auth::check())
                <!-- Settings Dropdown -->
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-700 dark:text-gray-200 bg-gray-100 dark:bg-gray-600 hover:text-gray-500 transition-colors duration-500">
                            <div id="name" name="name">{{ Auth::user()->name }}</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 1.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                @else
                <div class="flex space-x-4">
                    <a href="{{url('/login')}}" class="text-gray-300 hover:text-white transition-colors duration-300">Login</a>
                    <a href="{{url('/register')}}" class="text-gray-300 hover:text-white transition-colors duration-300">Registrasi</a>
                </div>
                @endif
            </div>
            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-100 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-100 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1 bg-red-900 dark:bg-red-800">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-gray-400 hover:bg-red-700 dark:hover:bg-red-600 transition-colors duration-300">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('pemesanan')" :active="request()->routeIs('pemesanan')" class="text-gray-400 hover:bg-red-700 dark:hover:bg-red-600 transition-colors duration-300">
                {{ __('Pemesanan') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('artikel')" :active="request()->routeIs('artikel')" class="text-gray-400 hover:bg-red-700 dark:hover:bg-red-600 transition-colors duration-300">
                {{ __('Artikel') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('notifikasi')" :active="request()->routeIs('notifikasi')" class="text-gray-400 hover:bg-red-700 dark:hover:bg-red-600 transition-colors duration-300">
                {{ __('Notifikasi') }}
            </x-responsive-nav-link>
        </div>
        @if(Auth::check())
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-100 bg-white">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-900">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500 dark:text-gray-600">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="text-gray-700 hover:bg-gray-200 dark:hover:bg-gray-100 transition-colors duration-300">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="text-gray-700 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors duration-300">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        @endif
    </div>
</nav>
