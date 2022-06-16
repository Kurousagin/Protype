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




        <form method="POST" action="/user/update/{{ Auth::user()->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Name -->
            
            <div class="mt-4">
                
                <x-input class="block mt-1 w-full" type="file" id="image" name="image"   autofocus />

            </div>

            <div class="mt-4">

                <x-input class="block mt-1 w-full" type="text" placeholder="Seu nome "  value="{{ Auth::user()->name }}" name="name" autofocus />
            </div>

            <!-- Social -->
            <div class="mt-4">


                <x-input class="block mt-1 w-full" type="text" placeholder="Seu @" value="{{ Auth::user()->social }}" name="social" />
            </div>

            <!-- TELEFONE -->
            <div class="mt-4">


                <x-input class="block mt-1 w-full" type="number" placeholder="Seu Numero"  value="{{ Auth::user()->telefone }}" name="telefone" />
            </div>

            <!-- Password -->
            <div class="mt-4">


                <x-input class="block mt-1 w-full" placeholder="Sua escola"  value="{{ Auth::user()->escola }}" type="text" name="escola" autocomplete="" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 flex">
                <x-input class="block mt-1 w-full" type="text" placeholder="data de nascimento"  value="{{ Auth::user()->born }}" disabled />
                <x-input class="block mt-1 w-full" type="date" name="born" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Atualizar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>


</x-app-layout>