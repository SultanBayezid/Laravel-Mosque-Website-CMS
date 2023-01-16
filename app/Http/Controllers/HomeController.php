<?php

namespace App\Http\Controllers;
use App\Models\User;
use Hash;
Use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route('prayer-time.index');
    }
    public function profile()
    {
        return view('backend.profile.index');
    }
    public function profileUpdate(Request $request, $id)
    {
        // dd($request->all());
            $request->validate([
                'name' =>'required|min:4|string|max:255',
                'email'=>'required|email|string|max:255'
            ]);
            $user =Auth::user();
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->phone = $request['phone'];
            if($request->password!=NULL){
                $user->password =  Hash::make($request->password); 
            }
            if ($request->hasFile('image')){
                $image = $request->file('image');
                $file_name = "profile_".time().'.'.$image->getClientOriginalExtension();
                $image->move(base_path('public/uploads/profile/'),$file_name);
                $user->image = $file_name;
             }
            $user->save();
            return redirect()->route('profile-list')->with('success','Profile updated successfully!');
    }
}
