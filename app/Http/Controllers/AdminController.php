<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard.dashboard');
    }
    public function manageUser(){
        return view('admin.user.manage-user',[
            'users'=>User::all()
        ]);
    }


    public function editUser($id){
        return view('admin.user.edit-user',[
            'user'=>User::find($id)
        ]);
    }
    public function updateUser(Request $request){
        User::updateUser($request);
        return back();

    }
}
?>
