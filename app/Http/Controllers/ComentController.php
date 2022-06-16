<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Comentt;
use App\Models\Posts;
use Symfony\Component\Console\Input\Input;

class ComentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    
    {
        $comentario = Comentt::orderBy('created_at', 'desc')->get();
        
        if($comentario -> posts_id){

        }  

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $comentt = new Comentt;

        
         $user = auth()->user();
      
        $comentario =  new Comentt();
        $comentario->user_id = $user->id;
        $comentario->posts_id= $request->input('post_id');
        $comentario->bodyComent  = $request->input('body');

        
        if($request->hasFile('image') && $request->file('image')->isValid()){
            

            $comentario->comentImage=$request->image->store('user/coment'.$user->id);
            
        
    }
        $comentario->save();

        return back();
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
        $comentario = Comentt::where('posts_id', '=',$post->id)->orderBy('created_at', 'desc')->get();

        return view('showcomentt')->with('posts', $post)->with('comentario', $comentario);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
