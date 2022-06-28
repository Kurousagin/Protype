<x-app-layout>
    <x-slot name="header">



    </x-slot>
    <!--áre para utilzar do if igual na parte de posts dos usuários,(criar página para os moderadores onde possam atualizar e cadastrar as 
notícias atuais -->



    <div class="container text-white">
        <div class="row">
            <div class="col-sm text-white ">
                <?php foreach ($posts as $key => $value) : ?>


                    <div class="pt-4 py-4">
                        <div class="max-w-full mx-auto lg:px-5">
                            <div class="bg-cyan-700 overflow-hidden shadow-md shadow-indigo-400 sm:rounded-lg">
                                <div class="p-6 bg-cyab-700 border-b border-gray-200">

                                    <div class=" flex ">
                                        <!-- onde vai ser chamada a imagem que o usuario tem como de perfil -->
                                        <a href="{!! url('/posts/search-user/'.$value->user->social) !!}">
                                            <img class="ring-2 ring-blue-500 ring-offset-4 rounded-full w-16 h-16 " src="{!! url('storage/'.$value->user->perfilImage) !!}" alt="" />

                                        </a>



                                        <div class="pl-10 text-black text-lg">
                                            <div class="border bg-white border-black p-6 rounded-lg ">
                                                <p style="max-width: 200px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{!! $value->bodyContent !!}</p> <!-- onde vai ser chamada o post do usuario -->

                                                <img class=" w-24 rounded-lg h-20 " src="{!! url('storage/'.$value->postImage) !!}" alt="" />

                                            </div>



                                            <span class="pull-right"> {!! $value->created_at->diffForHumans() !!}</span>
                                        </div>



                                    </div>

                                    <div class=" font-normal hover:font-bold ">
                                        <a href="{!! url('/posts/search-user/'.$value->user->social) !!}">{!! $value->user->social !!}</a>
                                    </div>

                                    <div class=" text-white">

                                        <button> <a href="{!! url('visualizar-post/'.$value->id) !!}" class="btn btn-success" role="button">Visualizar</a> </button>

                                    </div>



                                </div>
                            </div>

                        </div>

                    </div>



                <?php endforeach; ?>
                <div id="delete-btn" class="max-w-full mx-auto  lg:px-5  bg-amber-400 fixed left-10 bottom-10 rounded-full text-xl font-extrabold p-4 text-white">

                    <button onclick="">New post</button>

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

                <div id="overlay" class=" hidden max-w-full mx-auto lg:px-5 bg-cyan-400 fixed  left-10 bottom-20 rounded-lg py-6 ">

                    <div class="right-0 ">

                        <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full" id="close-modal" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>

                        </svg>
                    </div>

                    <form method="POST" action="/twet" enctype="multipart/form-data">
                        @csrf

                        <textarea name="body" id="body" class="w-full" placeholder="Poste aqui ó" style="border-radius: 20px" autofocus required></textarea>




                        <div class="flex">
                            <input type='file' id="image" name="image" multiple class="default " />
                            <button type="submit" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="height: 40px;">
                                    <path d="M21.707 2.293a1 1 0 0 0-1.069-.225l-18 7a1 1 0 0 0 .145 1.909l8.379 1.861 1.862 8.379a1 1 0 0 0 .9.78L14 22a1 1 0 0 0 .932-.638l7-18a1 1 0 0 0-.225-1.069zm-7.445 15.275L13.1 12.319l2.112-2.112a1 1 0 0 0-1.414-1.414L11.681 10.9 6.432 9.738l12.812-4.982z" style="fill:#1c1b1e" data-name="Share" />
                                </svg> </button>





                        </div>






                    </form>


                </div>


            </div>


            <div class="col-sm text-white">
                <?php foreach ($noticias as $key => $values) : ?>
                    <div class="bg-cyan-400 p-6 ">


                        <div class="flex pt-5 pb-3 border-b-2 border-gray-200  ">
                            <a target="_blank" class="pr-4" href="{!! $values->link !!}">
                                <img class=" w-40 h-32 rounded-lg  " src="{!! url('storage/'.$values->noticiaImage)!!}" />
                            </a>

                            <h1 class="text-lg  "> {!! $values->title !!} </h1>
                            @can('admin')

                            <div id="delete-btn" class="btn mt-6 btn-danger absolute right-8">

                                <a href="{!! url('not/destroy/'.$values->id) !!}">excluir</a>

                            </div>
                            @endcan

                        </div>



                    </div>
                <?php endforeach; ?>







            </div>
        </div>
    </div>











</x-app-layout>