<nav x-data="{ open: false }" class="bg-gray-100 border-b border-white">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-2 lg:px-8">
        <div class="flex justify-between ">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center h-16 " style="width: 25%">
                    <img src="{!! url('site/img/22.png') !!}" alt="">
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('/posts')" :active="request()->routeIs('/posts')">
                        {{ __('Home') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('/exclusive')" :active="request()->routeIs('/exclusive')">
                        {{ __('Premium') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                    <x-nav-link :href="route('/forum')" :active="request()->routeIs('/forum')">
                        {{ __('Forum') }} 
                    </x-nav-link>
                   
                </div>
                @can('admin')
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('/not')" :active="request()->routeIs('/not')">
                        {{ __('Notícias') }}
                    </x-nav-link>

                </div>
                @endcan

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6 ">
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <img class="ring-2 ring-amber-500 ring-offset-4 rounded-full " style="height: 45px; width: 160px" src="{!! url('storage/'.Auth::user()->perfilImage) !!}" />

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('dashboard')">
                                {{ __('Perfil') }}
                            </x-dropdown-link>

                            <x-dropdown-link :href="route('/user/edit')">
                                {{ __('Editar Perfil') }}
                            </x-dropdown-link>


                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Sair') }}
                            </x-dropdown-link>
                        </form>

                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
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
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('/posts')" :active="request()->routeIs('/posts')">
                {{ __('Home') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('/exclusive')" :active="request()->routeIs('/exclusive')">
                {{ __('Premium') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('/forum')" :active="request()->routeIs('/forum')">
                {{ __('Forum') }}
            </x-responsive-nav-link>
        </div>
        @can('admin')
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('/not')" :active="request()->routeIs('/not')">
                {{ __('Notícias') }}
            </x-nav-link>
        </div>
        @endcan

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">


            <div class="mt-3 space-y-1">
                <!-- Authentication -->

                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Perfil') }}
                    </x-responsive-nav-link>
                </div>

                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link :href="route('/user/edit')" :active="request()->routeIs('/dashboard/edit')">
                        {{ __('Alterar perfil') }}
                    </x-responsive-nav-link>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Sair') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>