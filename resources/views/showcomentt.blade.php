<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Teu perfil é aqui palhaço ') }}
        </h2>


    </x-slot>




    <?php foreach ($comentario as $key => $value) : ?>


        <div class="pt-4 py-4">
            <div class="max-w-full mx-auto lg:px-5">
                <div class="bg-cyan-700 overflow-hidden shadow-md shadow-indigo-400 sm:rounded-lg">
                    <div class="p-6 bg-cyab-700 border-b border-gray-200">

                        <div class=" flex ">
                            <!-- onde vai ser chamada a imagem que o usuario tem como de perfil -->



                            <div class="pl-10 text-black text-lg">
                                <div class="border bg-white border-black p-6 rounded-lg">
                                    <h3>{!! $value->bodyComent !!}</h3> <!-- onde vai ser chamada o post do usuario -->
                                    <img class=" max-h-screen " src="{!! url('storage/'.$value->comentImage) !!}" alt="" />
                                </div>

                                <div class=" font-normal hover:font-bold ">
                                    <h1> {!! $value->user_social !!}</h1>
                                </div>


                                <span class="pull-right"> {!! $value->created_at->diffForHumans() !!}</span>


                            </div>



                        </div>







                    </div>
                </div>

            </div>

        </div>



    <?php endforeach; ?>










</x-app-layout>