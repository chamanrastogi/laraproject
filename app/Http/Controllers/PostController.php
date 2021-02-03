<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result= Post::all();
        
        return view('admin.post.index',['data'=>$result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $r->validate([
            'title'=>'required|min:8|max:255',           
            'post_image'=>'required|mimes:jpeg,gif,png',
            'body'=>'required'
             ]);
          
        if($file=$r->file('post_image'))
        {
    $image=$r->file('post_image');
    $ext=$image->extension();
    $file=time().'.'.$ext;     
    $image->storeAs('public/post',$file);
      }
       //$us=Auth::user();
        $data=new Post();   
        $data->user_id=auth()->user()->id;      
        $data->title=$r->title; 
        $data->post_image=$file;      
        $data->body=$r->body;       
        $pp=$data->save();
if($pp)
{
    $r->session()->flash('type',"success");
    $r->session()->flash('msg',"Post with Title:".$r->title);
    return redirect()->route('post.index');
}else
{
    $r->session()->flash('type',"danger");
    $r->session()->flash('msg',"Error in Adding");  
    return redirect()->route('post.create');
}


   
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
    public function edit(Post $post)
    {
        
        
        return view('admin.post.edit',['data'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        $r->validate([
            'title'=>'required|min:8|max:255',                
            'body'=>'required'
             ]);
        if($file=$r->file('post_image'))
        {
    $image=$r->file('post_image');
    $ext=$image->extension();
    $file=time().'.'.$ext;     
    $image->storeAs('public/post',$file);
      }
     
        $data=Post::findOrFail($id);       
        $data->user_id=auth()->user()->id;    
        $data->title=$r->title; 
        $data->post_image=$file;      
        $data->body=$r->body;       
        $pp=$data->save();       
if($pp)
{
    $r->session()->flash('type',"success");
    $r->session()->flash('msg',"Post id: ".$id." Successfully Updated");
    return redirect()->route('post.update',$id);
}else
{
    $r->session()->flash('type',"danger");
    $r->session()->flash('msg',"Error in Updating Post");  
    return redirect()->route('post.update',$id);
}

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
           $data= Post::find($id);
           $pp=$data->delete();
           if($pp)
   {
       session()->flash('type',"danger");
       session()->flash('msg',"Post id: ".$id."  Deleted Successfully");
       return redirect()->route('post.index');
   }else
   {
       session()->flash('type',"warning");
       session()->flash('msg',"Error in Deleting Post Id:".$id);  
      return redirect()->route('post.index');
   }
       
    }

    public function view(Post $post)
    {
        return view('blog-post',['post'=>$post]);
    }
   
}
