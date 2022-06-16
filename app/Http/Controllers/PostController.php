<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\HttpFoundation\File\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = auth()->user();

        $posts = $user->posts;

        return view('dashboard')->with('posts', $posts)->with('user', $user);
    }

    public function Home()

    {
        $posts = Posts::orderBy('created_at', 'desc')->get();
        $user = auth()->user();



        return view('home')->with('posts', $posts)->with('user', $user);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if(Input::file());
        // {
        //     $imagem = Input::file('imagem');
        //     $extensao = $imagem->getClientOriginalExtension();
        //     if($extensao != 'png' && $extensao != 'jpg');   {
        //         return back();
        //     }
        // }
        // $posts = new Posts();


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if($request->hasFile('image')){
        //     // Get filename with the extension
        //     $filenameWithExt = $request->file('image')->getClientOriginalName();
        //     // Get just filename
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     // Get just ext
        //     $extension = $request->file('image')->getClientOriginalExtension();
        //     // Filename to store
        //     $fileNameToStore= $filename.'_'.time().'.'.$extension;
        //     // Upload Image
        //     $path = $request->file('image')->storeAs('public/site/img', $fileNameToStore);
        // } else {
        //     $fileNameToStore = 'noimage.png';
        // }
        // //save in database
        // $itens = Posts::create([
        //     $user = auth()->user(),
        //     'user_id' => $user->id,
        //     'bodyContent' => $request->body,
        //     'postImage' => $fileNameToStore
        // ]);



        $posts = new Posts;


        $user = auth()->user();
        $posts->user_id = $user->id;
        $posts->bodyContent =  $request->body;

       
        if($request->hasFile('image') && $request->file('image')->isValid()){
            

            $posts->postImage=$request->image->store('site/img/');
            
        
    }
            $posts->save();
         
        
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posts::find($id);
        return view('showpost')->with('post', $post);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Posts::findOrFail($id)->delete();

        return redirect('dashboard');
    }
}
