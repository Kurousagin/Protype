<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Teu perfil é aqui palhaço ') }}
        </h2>


    </x-slot>

    <div class=" bg-black">
        <div class="py-6">
            <div class="max-w-screen-md max-h-screen bg-black">
                <div class="py-6 ">
                    <div class="max-w-full mx-auto lg:px-5">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                @can('user')
                                <h1 class="font-serif">Informações sobre mim:</h1>
                                <div class="flex">
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <g>
                                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25
                                                                8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1
                                                                1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0
                                                                00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026
                                                                9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026
                                                                0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6
                                                                18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                            </g>
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3
                                                    3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0
                                                        004 0z" clip-rule="evenodd" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M6 3a1 1 0 011-1h.01a1 1 0 010 2H7a1 1 0 01-1-1zm2 3a1 1 0 00-2 0v1a2 2 0 00-2 2v1a2 2 0 00-2 2v.683a3.7 3.7 0 011.055.485 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0A3.7 3.7 0 0118 12.683V12a2 2 0 00-2-2V9a2 2 0 00-2-2V6a1 1 0 10-2 0v1h-1V6a1 1 0 10-2 0v1H8V6zm10 8.868a3.704 3.704 0 01-4.055-.036 1.704 1.704 0 00-1.89 0 3.704 3.704 0 01-4.11 0 1.704 1.704 0 00-1.89 0A3.704 3.704 0 012 14.868V17a1 1 0 001 1h14a1 1 0 001-1v-2.132zM9 3a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm3 0a1 1 0 011-1h.01a1 1 0 110 2H13a1 1 0 01-1-1z" clip-rule="evenodd" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                        </svg>


                                    </div>
                                    <div class="break-words text-sm font-mono">
                                        <p>{{ Auth::user()->escola }}</p> <!-- substituirá pelas informações do usuario que estão no BD-->
                                        <p>{{ Auth::user()->social }}</p><!-- substituirá pelas informações do usuario que estão no BD-->
                                        <p>{{ Auth::user()->Born }}</p><!-- substituirá pelas informações do usuario que estão no BD-->
                                        <p>{{ Auth::user()->telefone }}</p><!-- substituirá pelas informações do usuario que estão no BD-->
                                    </div>
                                </div>


                                <p>Seus tweets:</p>
                                @elsecan('admin')
                                Somente o administrador pode ler isso
                                @endcan

                            </div>
                        </div>
                    </div>
                </div>

            </div>



            
        </div>









    </div>


    <?php foreach ($posts as $key => $value) : ?>
        <div class="pt-5 ">

            <div class="max-w-full mx-auto lg:px-5">
                <div class="bg-white overflow-hidden shadow-md shadow-indigo-400 sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        <div class=" flex ">

                            <a href=""> <img class="ring-2 ring-blue-500 ring-offset-4 rounded-full w-16 h-16 " src="{{ asset('site/img/eyes.jpeg') }}" />
                            </a>


                            <div class="pl-10">
                                <h3>{!! $value->bodyContent !!}</h3>
                                <span class="pull-right"> {!! $value->created_at->diffForHumans() !!}</span>
                            </div>


                            <form action="" method="" class="absolute right-8 hover:text-rose-700">

                                <button type="submit">Excluir</button>

                            </form>
                        </div>

                        <div class="static font-normal hover:font-bold">
                            <a href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    <?php endforeach; ?>



</x-app-layout>