<?php

namespace App\Http\Controllers;
use App\Models\post;
use App\Models\postCat;
use App\Models\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
       $all_data= post::all();
       $cat=postCat::all();
       $tags=tag::all();
        return view('backend.index',compact('all_data','cat','tags'));
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
      $this->validate($request,[
          'title' => 'required',
          'contant' => 'required',

      ]);

      if($request->hasFile('f_img')){

          $img=$request->file('f_img');
          $file_name=md5(rand().time()).'.'.$img->getClientOriginalExtension();
          $img->move(public_path('media/post_img/'),$file_name);

      }
      else{
          $file_name='';
      }



      $posts=post::create([
          'title'=> $request->title,
          'slug'=> Str::slug($request->title),
          'content'=> $request->contant,
          'image'=> $file_name,
          'user'=>Auth::user()->id,
      ]);

        $posts ->tags()->attach($request->tag);
        $posts ->categories()->attach($request->cat);

        return redirect() -> route('post.index') -> with('success','Post Added successfully');
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
        $data = post::find($id);

        $cat_all = postCat::all();

        
        $post_cat= $data -> categories;
        $check_id=[];
        foreach($post_cat as $check_cat){
            array_push($check_id,$check_cat->id);
        }
        
        $cat_list ='';
        foreach($cat_all as $cat){
            if(in_array($cat->id , $check_id)){
                $checked= "checked";
            }
            else{
                $checked='';
            }
            $cat_list .= '<div class="checkbox"><label> <input '.$checked.' type="checkbox" name="cat[]" value="'. $cat->id .'"> '. $cat -> cat_name .'</label></div>';
        }

        return [
            'title' => $data -> title,
            'image' => $data -> image,
            'cat_list' => $cat_list
            
        ];
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
        $data = post::find($id);
        $data->delete();
        unlink('public/media/post_img/'.$data ->image);
        return redirect() -> route('post.index') -> with('success','Post Deleted successfully');
    }
}
