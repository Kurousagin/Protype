<x-app-layout>
    <x-slot name="header">



    </x-slot>
    <!--áre para utilzar do if igual na parte de posts dos usuários,(criar página para os moderadores onde possam atualizar e cadastrar as 
notícias atuais -->

    <div class="container text-white">
        <div class="row">
            <div class="col-sm text-white left-0">
                <?php foreach ($posts as $key => $value) : ?>


                    <div class="pt-4 py-4">
                        <div class="max-w-full mx-auto lg:px-5">
                            <div class="bg-cyan-700 overflow-hidden shadow-md shadow-indigo-400 sm:rounded-lg">
                                <div class="p-6 bg-cyab-700 border-b border-gray-200">

                                    <div class=" flex ">
                                        <!-- onde vai ser chamada a imagem que o usuario tem como de perfil -->
                                        <a href="">
                                            <!--  <img class="ring-2 ring-blue-500 ring-offset-4 rounded-full w-16 h-16 "
                                                src="{!! asset($value->user->image) !!}" alt="" />-->
                                            <img class="ring-2 ring-blue-500 ring-offset-4 rounded-full w-16 h-16 " src="{!! asset('site/img/eyes.jpeg') !!}" alt="" />

                                        </a>


                                        <div class="pl-10 text-black text-lg">
                                            <div class="border bg-white border-black p-6 rounded-lg">
                                                <h3>{!! $value->bodyContent !!}</h3> <!-- onde vai ser chamada o post do usuario -->

                                            </div>


                                            <img src="{!! asset($value->imagem) !!}" alt="" />

                                            <span class="pull-right"> {!! $value->created_at->diffForHumans() !!}</span>
                                        </div>



                                    </div>

                                    <div class=" font-normal hover:font-bold ">
                                        <a href="{{ route('dashboard') }}">{!! $value->user->name !!}</a>
                                    </div>

                                    <div class=" text-white">

                                        <button> <a href="{!! url('visualizar-post/'.$value->id) !!}" class="btn btn-success" role="button">Visualizar</a> </button>

                                    </div>



                                </div>
                            </div>

                        </div>

                    </div>



                <?php endforeach; ?> One of three columns
            </div>
            <div class="col-sm text-white">
                <div class="bg-cyan-400 p-6 rounded-lg">
                    <div class="flex pt-5 pb-3 border-b-2 border-gray-200  ">
                        <a target="_blank" class="pr-4" href="https://g1.globo.com/educacao/noticia/2022/05/15/mesmo-com-notas-baixissimas-no-mec-faculdades-de-pedagogia-cacam-alunos-com-mensalidades-abaixo-de-r-200.ghtml">
                            <img class=" w-40 h-32 rounded-lg  " src="{{ asset('site/img/fachada.webp') }}" />
                        </a>

                        <h1 class="text-lg  "> Mesmo com notas baixíssimas no MEC,faculdades ... </h1>
                    </div>
                    <div class="flex pt-5 pb-3 border-b-2 border-gray-200  ">
                        <a target="_blank" class="pr-4" href="https://g1.globo.com/sp/campinas-regiao/noticia/2022/05/16/unicamp-2023-prazo-para-pedir-isencao-na-taxa-do-vestibular-comeca-nesta-segunda-veja-regras.ghtml">
                            <img class=" w-40 h-32 rounded-lg  " src="{{ asset('site/img/vest.webp') }}" />
                        </a>

                        <h1 class="text-lg  ">Unicamp 2023: prazo para pedir isenção ... </h1>
                    </div>
                    <div class="flex pt-5 pb-3 border-b-2 border-gray-200  ">
                        <a target="_blank" class="pr-4" href="https://g1.globo.com/educacao/noticia/2022/05/15/mesmo-com-notas-baixissimas-no-mec-faculdades-de-pedagogia-cacam-alunos-com-mensalidades-abaixo-de-r-200.ghtml">
                            <img class=" w-40 h-32 rounded-lg  " src="{{ asset('site/img/ven.webp') }}" />
                        </a>

                        <h1 class="text-lg  "> Notas no MEC: como descobrir o conceito de um curso ou faculdade? </h1>
                    </div>


                </div>
            </div>
        </div>
    </div>



    <!--area hover-->




    <div id="delete-btn" class="max-w-full mx-auto  lg:px-5 bg-amber-400 fixed right-10 bottom-10 rounded-full text-white">

        <button onclick="">New post</button>

    </div>



    <div id="overlay" class=" hidden max-w-full mx-auto lg:px-5 bg-cyan-400 fixed  right-10 bottom-20 rounded-lg py-6 ">

        <div class="right-0 ">

            <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full" id="close-modal" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>

            </svg>
        </div>

        <form method="POST" action="/twet">
            @csrf

            <textarea name="body" id="body" class="w-full" placeholder="tweet aqui ó" style="border-radius: 20px" required autofocus></textarea>


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
    <!--area hover/modal-->


    <!--área para a exibição dos posts utilizando o if(enquanto houver posts no banco de dados seram exibidas novas caixas com o conteúdo e 
os dados do usuário que publicou, junto ao tempo de publicação -->







</x-app-layout>





<x-app-layout>
    <x-slot name="header">



    </x-slot>
    <!--áre para utilzar do if igual na parte de posts dos usuários,(criar página para os moderadores onde possam atualizar e cadastrar as 
notícias atuais -->

    <div class=" bg-black">
        <div class="flex justify-between">
            <div class="max-w-screen-md max-h-screen bg-black">



                <?php foreach ($posts as $key => $value) : ?>


                    <div class="pt-4 py-4">
                        <div class="max-w-full mx-auto lg:px-5">
                            <div class="bg-cyan-700 overflow-hidden shadow-md shadow-indigo-400 sm:rounded-lg">
                                <div class="p-6 bg-cyab-700 border-b border-gray-200">

                                    <div class=" flex ">
                                        <!-- onde vai ser chamada a imagem que o usuario tem como de perfil -->
                                        <a href="">
                                            <!--  <img class="ring-2 ring-blue-500 ring-offset-4 rounded-full w-16 h-16 "
                                                                    src="{!! asset($value->user->image) !!}" alt="" />-->
                                            <img class="ring-2 ring-blue-500 ring-offset-4 rounded-full w-16 h-16 " src="{!! asset('site/img/eyes.jpeg') !!}" alt="" />

                                        </a>


                                        <div class="pl-10 text-black text-lg">
                                            <div class="border bg-white border-black p-6 rounded-lg">
                                                <h3>{!! $value->bodyContent !!}</h3> <!-- onde vai ser chamada o post do usuario -->

                                            </div>


                                            <img src="{!! asset($value->) !!}" alt="" />

                                            <span class="pull-right"> {!! $value->created_at->diffForHumans() !!}</span>
                                        </div>



                                    </div>

                                    <div class=" font-normal hover:font-bold ">
                                        <a href="{{ route('dashboard') }}">{!! $value->user->name !!}</a>
                                    </div>

                                    <div class=" text-white">

                                        <button> <a href="{!! url('visualizar-post/'.$value->id) !!}" class="btn btn-success" role="button">Visualizar</a> </button>

                                    </div>



                                </div>
                            </div>

                        </div>

                    </div>



                <?php endforeach; ?>

            </div>



            <div class="max-w-screen-md max-h-screen pt-2 bg-black">
                <div class="bg-cyan-400 p-6 rounded-lg">
                    <div class="flex pt-5 pb-3 border-b-2 border-gray-200  ">
                        <a target="_blank" class="pr-4" href="https://g1.globo.com/educacao/noticia/2022/05/15/mesmo-com-notas-baixissimas-no-mec-faculdades-de-pedagogia-cacam-alunos-com-mensalidades-abaixo-de-r-200.ghtml">
                            <img class=" w-40 h-32 rounded-lg  " src="{{ asset('site/img/fachada.webp') }}" />
                        </a>

                        <h1 class="text-lg  "> Mesmo com notas baixíssimas no MEC,faculdades ... </h1>
                    </div>
                    <div class="flex pt-5 pb-3 border-b-2 border-gray-200  ">
                        <a target="_blank" class="pr-4" href="https://g1.globo.com/sp/campinas-regiao/noticia/2022/05/16/unicamp-2023-prazo-para-pedir-isencao-na-taxa-do-vestibular-comeca-nesta-segunda-veja-regras.ghtml">
                            <img class=" w-40 h-32 rounded-lg  " src="{{ asset('site/img/vest.webp') }}" />
                        </a>

                        <h1 class="text-lg  ">Unicamp 2023: prazo para pedir isenção ... </h1>
                    </div>
                    <div class="flex pt-5 pb-3 border-b-2 border-gray-200  ">
                        <a target="_blank" class="pr-4" href="https://g1.globo.com/educacao/noticia/2022/05/15/mesmo-com-notas-baixissimas-no-mec-faculdades-de-pedagogia-cacam-alunos-com-mensalidades-abaixo-de-r-200.ghtml">
                            <img class=" w-40 h-32 rounded-lg  " src="{{ asset('site/img/ven.webp') }}" />
                        </a>

                        <h1 class="text-lg  "> Notas no MEC: como descobrir o conceito de um curso ou faculdade? </h1>
                    </div>


                </div>

            </div>
        </div>

        <!--area hover-->




        <div id="delete-btn" class="max-w-full mx-auto  lg:px-5 bg-amber-400 fixed right-10 bottom-10 rounded-full text-white">

            <button onclick="">New post</button>

        </div>



        <div id="overlay" class=" hidden max-w-full mx-auto lg:px-5 bg-cyan-400 fixed  right-10 bottom-20 rounded-lg py-6 ">

            <div class="right-0 ">

                <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full" id="close-modal" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>

                </svg>
            </div>

            <form method="POST" action="/twet">
                @csrf

                <textarea name="body" id="body" class="w-full" placeholder="tweet aqui ó" style="border-radius: 20px" required autofocus></textarea>


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
        <!--area hover/modal-->


        <!--área para a exibição dos posts utilizando o if(enquanto houver posts no banco de dados seram exibidas novas caixas com o conteúdo e 
os dados do usuário que publicou, junto ao tempo de publicação -->







</x-app-layout>