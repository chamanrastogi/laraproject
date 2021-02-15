<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\User;
class UserController extends Controller
{
    //
    public function index()
    {
        $user=User::all();
        return view('admin.users.index',['user'=>$user]);
    }
    public function show(User $user){
       // dd($user);
         return view('admin.users.profile',['user'=>$user]);
     }
     
    public function create()
     {
        return view('admin.users.create');
     }
     public function update(Request $r, $id)
     {
      $r->validate([
         'username'=>'required|min:8|max:255', 
         'name'=>'required|min:8|max:255', 
         'email'=>'required|max:255|email', 
         'avatar'=>'mimes:jpeg,gif,png',
         'password'=>'required|min:6|max:12|confirmed',          
               
          ]);
      $user=User::findOrFail($id); 
  
         // dd( $r->file('avatar'));

        
          if($file=$r->file('avatar'))
          {  

      $image=$r->file('avatar');
      $ext=$image->extension();     
      $file=time().'.'.$ext;       
      $image->storeAs('public/user',$file);
      $user->avatar=$file;  
        }
       
        $user->username=$r->username;           
        $user->name=$r->name;   
        $user->email=$r->email; 
        $user->password=$r->password; 
        $pp=$user->save();       
if($pp)
{
    $r->session()->flash('type',"success");
    $r->session()->flash('msg',"Profile Successfully Updated");
    return redirect()->route('user.profile.show',$id);
}else
{
    $r->session()->flash('type',"danger");
    $r->session()->flash('msg',"Error in Updating User");  
    return redirect()->route('user.profile.show',$id);
}
     }
     public function destory(User $user)
    {
           //
         
           $pp=$user->delete();
           if($pp)
   {
       session()->flash('type',"danger");
       session()->flash('msg',"User id: ".$user->id."  Deleted Successfully");
       return redirect()->route('user.index');
   }else
   {
       session()->flash('type',"warning");
       session()->flash('msg',"Error in Deleting User Id:".$user->id);  
      return redirect()->route('user.index');
   }
       
    }
     
}
