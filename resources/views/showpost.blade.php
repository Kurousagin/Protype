<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Teu perfil é aqui palhaço ') }}
        </h2>


    </x-slot>
    <div class="pt-5 ">

        <div class="max-w-full mx-auto lg:px-5">
            <div class="bg-white overflow-hidden shadow-md shadow-indigo-400 sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class=" flex ">

                        <a href=""> <img class="ring-2 ring-blue-500 ring-offset-4 rounded-full w-16 h-16 " src="{{ asset('site/img/eyes.jpeg') }}" />
                        </a>


                        <div class="pl-10">
                            <h3>{!! $post->bodyContent !!}</h3>
                            <span class="pull-right"> {!! $post->created_at->diffForHumans() !!}</span>
                        </div>



                    </div>

                    <div class="static font-normal hover:font-bold">
                        <a href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a>
                    </div>

                </div>
            </div>
        </div>

    </div>




    <div id="delete-btn" class="max-w-full mx-auto  lg:px-5 bg-amber-400 fixed right-10 bottom-10 rounded-full text-white">

        <button onclick="">New coment</button>

    </div>


    <div id="overlay" class=" hidden max-w-full mx-auto lg:px-5 bg-cyan-400 fixed  right-10 bottom-20 rounded-lg py-6 ">

        <div class="right-0 ">

            <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full" id="close-modal" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>

            </svg>
        </div>

        <form method="POST" action="/twet">
            @csrf

            <textarea name="body" id="body" class="w-full" placeholder="Seu comentário" style="border-radius: 20px" required autofocus></textarea>


            <hr class="my-4">



            <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow  text-sm  h-5 w-5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
            </button>

            <form action="">

                @csrf
                <input type='file' id="image" name="image" class="default" />
            </form>



        </form>


    </div>

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const overlay = document.querySelector('#overlay')
            const delBtn = document.querySelector('#delete-btn')
            const closeBtn = document.querySelector('#close-modal')

            const toggleModal = () => {
                overlay.classList.toggle('hidden')
                overlay.classList.toggle('flex')
            }

            delBtn.addEventListener('click', toggleModal)

            closeBtn.addEventListener('click', toggleModal)
        })
    </script>
</x-app-layout>