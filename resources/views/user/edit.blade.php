<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' ') }}
        </h2>
    </x-slot>
    <x-auth-card>
        <x-slot name="logo">

        </x-slot>
        <div class="p-6 text-lg">
            <h1>Insira suas novas informações pessoais </h1>
        </div>




        <form method="POST" action="{{ route('dashboard') }}">
            @csrf

            <!-- Name -->
            <div>

                <x-inputclass="block mt-1 w-full" type="text" placeholder="{{ Auth::user()->name }}" required autofocus />
            </div>

            <!-- Social -->
            <div class="mt-4">


                <x-input class="block mt-1 w-full" type="email" placeholder="{{ Auth::user()->social }}" required />
            </div>

            <!-- Social -->
            <div class="mt-4">


                <x-input class="block mt-1 w-full" type="email" placeholder="{{ Auth::user()->telefone }}" required />
            </div>

            <!-- Password -->
            <div class="mt-4">


                <x-input class="block mt-1 w-full" placeholder="{{ Auth::user()->escola }}" type="text" required autocomplete="" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 flex">
                <x-input class="block mt-1 w-full" type="password" placeholder="{{ Auth::user()->Born }}" disabled />
                <x-input class="block mt-1 w-full" type="date" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Atualizar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>


</x-app-layout>