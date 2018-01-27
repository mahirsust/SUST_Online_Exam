<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Encryption\DecryptException;

class AdminDeskController extends Controller
{
  public function index()
  {
    $data1=DB::table('users')->get();
    return view('admin.admindesk', compact('data1'));
  }


  public function addnew(Request $request)
  {
    $user = User::where('email', '=', $request->email)->first();
    //echo $user;

    if(is_null($user))
    {
      $request->session()->flash('alert-danger', 'No user with this email is registered!');
      return redirect()->action('AdminDeskController@index');

    }

    if($user->type != "student")
    {

      $request->session()->flash('alert-danger', 'The user already has a role!');
      return redirect()->action('AdminDeskController@index'); 

    }
    
    $user->email = $request->email;
    $user->save();
    $request->session()->flash('alert-success', 'Role is updated succesfully!');
    return redirect()->action('AdminDeskController@index');
  }

 
 
 public function delete(Request $request)
 {
   $user = User::find($request->id);
   $user->type = "student";
   $user->save();

   $request->session()->flash('alert-success', 'Role of the user is deleted succesfully!');
   return redirect()->action('AdminDeskController@index');
 }
}