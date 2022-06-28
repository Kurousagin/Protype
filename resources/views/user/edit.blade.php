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
            <div class="flex">
                <img class="ring-2 ring-blue-500 ring-offset-4  rounded-full w-16 h-16 " src="{!! url('storage/'.Auth::user()->perfilImage) !!}" alt="" />
            
            

                <input class=" mt-1 w-full p-6" type="file" id="image" name="image" autofocus />

            </div>

            <div class="mt-4">

                <x-input class="block mt-1 w-full" type="text" placeholder="Seu nome " value="{{ Auth::user()->name }}" name="name" autofocus />
            </div>

            <!-- Social -->
            <div class="mt-4">


                <x-input class="block mt-1 w-full" type="text" placeholder="Seu @" value="{{ Auth::user()->social }}" name="social" />
            </div>

            <!-- TELEFONE -->
            <div class="mt-4">


                <x-input class="block mt-1 w-full" type="tel" placeholder="Seu Numero" value="{{ Auth::user()->telefone }}" name="telefone" />
            </div>

            <!-- Password -->
            <div class="mt-4">


                <x-input class="block mt-1 w-full" placeholder="Sua escola" value="{{ Auth::user()->escola }}" type="text" name="escola" autocomplete="" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 ">

                <x-input class="block mt-1 w-full" type="date" name="born" value="{{ Auth::user()->born }}" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="flex">
                    {{ __('Atualizar') }}
                </x-button>
                <x-button class="flex " type="reset">
                    {{ __('Apagar') }}
                </x-button>
            </div>
        </form>


        <h1 class="text-white bg-black rounded-md p-2 text-center mt-8"> DANGER ÁREA</h1>

        <div id="delete-btn" class="btn mt-6 btn-danger flex flex-wrap justify-center">

            <button onclick="">Apagar Usuário</button>

        </div>

        <div id="overlay" class=" hidden  bg-black fixed  top-0 rounded-lg py-5  ">

            <h1 class="text-center text-white p-6 border-b border-white ">Tem certeza que deseja excluir a conta?</br>
                Todos os dados seram perdidos e não será possivel recuperá-los
            </h1>

            <div class="absolute  " style="right: 18px; bottom: 8px;">
                <button class="btn mt-6 btn-danger " id="close-modal" fill="currentColor" viewBox="0 0 20 20">
                    Fechar
                </button>


                <div class="btn mt-6 btn-success ">
                    <a href="{!! url('user/destroy/'.Auth::user()->id) !!}">Confirmar</a>
                </div>
            </div>






        </div>


        <!--  -->



    </x-auth-card>




    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const overlay = document.querySelector('#overlay')
            const delBtn = document.querySelector('#delete-btn')
            const closeBtn = document.querySelector('#close-modal')

            const toggleModal = () => {
                overlay.classList.toggle('hidden')

            }

            delBtn.addEventListener('click', toggleModal)

            closeBtn.addEventListener('click', toggleModal)
        })
    </script>


</x-app-layout>