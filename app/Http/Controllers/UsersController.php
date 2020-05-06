<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User; //importing your User's model
use Illuminate\Http\Request;

class UsersController extends Controller
{
   

/**
    * Show the form for editing the specified User.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
   */
    public function edit()
    {
        if(Auth::user()) {
         $user = User::find(Auth::user()->id);
        }
        if($user) {
            return view('user.edit')->withUser($user);
        } else {
            return redirect()->back();
        } 
 
    }

    /**
     * Update the specified Users in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if($user) {
            $validate = null;
            if(Auth::user()->email === $request['email']) {
                $validate = $request->validate([
                'name' => 'required|min:2',
                'email' => 'required|email',
            ]);
            } else {
                $validate = $request->validate([
                'name' => 'required|min:2',
                'email' => 'required|email|unique:users',
            
            ]);

            }
            if($validate) {
                $user->name = $request['name'];
                $user->email = $request['email'];
                $user->save();
                $request->session()->flash('success', 'Your details have now been updated!');
                return redirect()->back();
            } else{
                return redirect()->back();
            }
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    
    }
}