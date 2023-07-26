<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserprofileController extends Controller
{
    public function index(){
        return view('admin.pages.profile.index',[
            'title' => 'My Profile',]);
    }
    public function edit(){
        return view('admin.pages.profile.edit',[
            'title' => 'Edit Profile',]);
    
    }
    public function update(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        auth()->user()->update($validatedData);
        return redirect('/admin/profile')->with('success', 'Edit Data Profil Berhasil');
    }
}
