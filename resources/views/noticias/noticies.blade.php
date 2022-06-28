<x-app-layout>
    <x-slot name="header">
    </x-slot>







    <div class="bg-white overflow-hidden shadow-md shadow-indigo-400 sm:rounded-lg text-center text-xl mt-6">
        <h1 class="">crie novas noticias </h1>

    </div> 

    <div class="bg-white shadow-indigo-400 sm:rounded-lg  p-6 text-xl mt-6  ">


        <form action="/con/noticias/cad" method="POST" class="pl-10" enctype="multipart/form-data">
            @csrf
            <input type='file' id="image" name="image" multiple class="default" required />

            <input type="text" class="flex rounded-lg mt-6" minlength="15" name="body" placeholder="titulo da reportagem/noticia">


            <input type="url" class="flex rounded-lg mt-6 " name="link" placeholder="link da reportagem/noticia ">

            <button type="submit" class="mt-6 bg-amber-400 rounded-lg p-2">cadastrar</button>
        </form>

    
    </div>




</x-app-layout>