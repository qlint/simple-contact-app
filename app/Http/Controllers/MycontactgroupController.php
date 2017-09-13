<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mycontactgroup;

class MycontactgroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // create a variable and store all the posts in it from the db
        $addcontacts = Mycontactgroup::all();

        //return a view and pass in the above variable
        return view('contactgroup.index')->withAddcontacts($addcontacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contactgroup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $model_object_instance = new model; */
        $contactgroups = new Mycontactgroup;
        /* $model_object_instance ->db_column = $request->name; */
        $contactgroups->mycontactgroup = $request->mycontactgroup;
        $contactgroups->save();

        /*redirecting to the content's particular page*/
        return redirect()->route('contactgroup.show', $contactgroups->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactgroups = Mycontactgroup::find($id);
        return view('contactgroup.show')->with('contactgroups', $contactgroups);
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
