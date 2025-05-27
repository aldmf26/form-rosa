<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with('roles')->latest()->get();
        $role = Role::all();

        $data = [
            'title' => 'User',
            'users' => $user,
            'roles' => $role
        ];
        return view('user.index', $data);
    }

    public function store(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $r->name,
            'email' => $r->email,
            'password' => bcrypt($r->password),
            'is_active' => 1
        ]);

        $user->assignRole($r->role);
        return redirect()->route('user.index')->with('sukses', 'User Created');
    }


    public function update(Request $r)
    {
        for ($i = 0; $i < count($r->id); $i++) {
            $user = User::findOrFail($r->id[$i]); // Ambil instance user
            $user->update([
                'name' => $r->name[$i],
                'email' => $r->email[$i],
            ]);

            // Sinkronkan role
            $user->roles()->sync([$r->role[$i]]);
        }

        return redirect()->route('user.index')->with('sukses', 'User Updated');
    }

    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('user.index')->with('sukses', 'User Deleted');
    }
}
