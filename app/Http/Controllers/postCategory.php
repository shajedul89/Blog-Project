<?php

namespace App\Http\Controllers;

use App\Models\postCat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class postCategory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $data= postCat::all();
        return view('backend.category.index',[
            'all_data' => $data,
        ]);
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

            'name' => 'required|unique:post_cats,cat_name'

        ]);

        postCat::create([

            'cat_name' => $request -> name,
            'slug' => Str::slug($request -> name),


        ]);


        return redirect() -> route('post-category.index') -> with('success','Category Added successfully');
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
        $data = postCat::find($id);
        return [
          'name' =>   $data -> cat_name,
          'id' =>   $data -> id,
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       $id= $request ->id;
       $data = postCat::find($id);
       $data -> cat_name = $request->name;
       $data -> slug = Str::slug($request->name);
       $data -> update();

        return redirect() -> route('post-category.index') -> with('success','Category Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data = postCat::find($id);
       $data->delete();
       return redirect() -> route('post-category.index') -> with('success','Category Deleted successfully');
    }

    public function catUnpublished($id){

      $data= postCat::find($id);
      $data -> status = "unpublished";
      $data->update();
        return redirect() -> route('post-category.index') -> with('success','Category Unpublished successfully');

    }

    public function catPublished($id){

        $data= postCat::find($id);
        $data -> status = "published";
        $data->update();
        return redirect() -> route('post-category.index') -> with('success','Category Published successfully');

    }
}
