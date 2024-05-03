<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('User.index')->with('user', $user);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'role' => $input['role'],
            'password' => Hash::make($request['password']),
        


        ]);

        return redirect('/User-Index');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
      
        $user->save();
        return redirect('/User-Index');
    }

    public function destroy($id)
    {

        $u = User::findOrFail($id);
        $u->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
