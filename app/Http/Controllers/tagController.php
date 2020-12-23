<?php

namespace App\Http\Controllers;

use App\Models\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class tagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $all_data = tag::all();
        return view('backend.tag.index',compact('all_data'));
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
        $this -> validate($request,[

            'name' => 'required|unique:tags,name'

        ]);

        tag::create([

            'name' => $request -> name,
            'slug' => Str::slug($request -> name),


        ]);


        return redirect() -> route('post-tag.index') -> with('success','Tag Added successfully');
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
        $data = tag::find($id);
        $data->delete();
        return redirect() -> route('post-tag.index') -> with('success','Tag Deleted successfully');
    }

    public function tagUnpublished($id){

        $data= tag::find($id);
        $data -> status = "unpublished";
        $data->update();
        return redirect() -> route('post-tag.index') -> with('success','Tag Unpublished successfully');

    }

    public function tagPublished($id){

        $data= tag::find($id);
        $data -> status = "published";
        $data->update();
        return redirect() -> route('post-tag.index') -> with('success','Tag Published successfully');

    }
}
