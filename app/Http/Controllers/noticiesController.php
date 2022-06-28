<?php

namespace App\Http\Controllers;

use App\Models\noticiesModel;
use Illuminate\Http\Request;

class noticiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('noticias.noticies');
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
    


        $not = new noticiesModel();


        $user = auth()->user();
        $not->user_id = $user->id;
        $not->title =  $request->body;
        $not->link =  $request->link; 



        if ($request->hasFile('image') && $request->file('image')->isValid()) {


            $not->noticiaImage = $request->image->store('site/img/not');
        }
        $not->save();


        return redirect('/posts');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() 
    {
        
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
        noticiesModel::findOrFail($id)->delete();

        return back();
    }
}
