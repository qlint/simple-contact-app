<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data4page;

class Data4pageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // create a variable and store all the posts in it from the db
        $addpersons = Data4page::all();

        //return a view and pass in the above variable
        return view('contact.index')->withAddpersons($addpersons);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* validate -> store -> redirect maybe */
        /*the validate*/
        /*$this->validate($request, array(
            'content' => 'required',
            'name' => 'required',
            'img1920' => 'required',
            'img1280' => 'required',
            'img1024' => 'required',
            'img512' => 'required',
            'img300' => 'required',
            'img1030x288' => 'required',
            'h1Ttle' => 'required',
            'h4Ttle' => 'required',
            'desc1' => 'required',
            'desc2' => 'required',
            'trailer' => 'required',
            'portal' => 'required'
            ));*/

        /*storing validated stuff to db*/
        /* $model_object_instance = new model; */
        $data4page = new Data4page;
        /* $model_object_instance ->db_column = $request->name; */
        $data4page->group = $request->group;
        /*$photoName = $request->$data4page->getClientOriginalName();*/
        $data4page->fname = $request->fname;
        $data4page->lname = $request->lname;
        $data4page->phone = $request->phone;
        $data4page->email = $request->email;
        $data4page->save();

        /*redirecting to the content's particular page*/
        return redirect()->route('contact.show', $data4page->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data4page = Data4page::find($id);
        return view('contact.show')->with('data4page', $data4page);
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
