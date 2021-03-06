<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
           
                <div class="shrink-0 flex items-center h-24" style="width: 25%">
                    
               

                <x-nav-link :href="route('initi')" :active="request()->routeIs('initi')">
                <img  src="{!! url('site/img/22.png') !!}" alt="">
                    </x-nav-link>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('sobre')" :active="request()->routeIs('sobre')">
                        {{ __('Sobre') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Redes sociais') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Contato') }}
                    </x-nav-link>
                </div>

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">


                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        @if (Route::has('login'))
                        <div class="pt-2 pb-3 space-y-1">
                            @auth
                            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Perfil') }}
                            </x-responsive-nav-link>
                            @else
                            <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('login')">
                                {{ __('Entrar') }}
                            </x-responsive-nav-link>
                        </div>
                        @if (Route::has('register'))
                        <div class="pt-2 pb-3 space-y-1">
                            <x-responsive-nav-link :href="route('register')" :active="request()->routeIs('register')">
                                {{ __('Cadastrar') }}
                            </x-responsive-nav-link>
                        </div>
                        @endif
                        @endauth
                        @endif


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
            <x-responsive-nav-link :href="route('sobre')" :active="request()->routeIs('sobre')">
                {{ __('Sobre') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Redes sociais ') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Contato') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">


            <div class="mt-3 space-y-1">
                <!-- Authentication -->

                @if (Route::has('login'))
                        <div class="pt-2 pb-3 space-y-1">
                            @auth
                            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Perfil') }}
                            </x-responsive-nav-link>
                            @else
                            <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('login')">
                                {{ __('Entrar') }}
                            </x-responsive-nav-link>
                        </div>
                        @if (Route::has('register'))
                        <div class="pt-2 pb-3 space-y-1">
                            <x-responsive-nav-link :href="route('register')" :active="request()->routeIs('register')">
                                {{ __('Cadastrar') }}
                            </x-responsive-nav-link>
                        </div>
                        @endif
                        @endauth
                        @endif
                </form>
            </div>
        </div>
    </div>
</nav>