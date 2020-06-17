<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profile.show',compact('user'));
    }
    public function edit(User $user)
    {
        return view('profile.edit',compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'username'=>['string','required','max:255','alpha-dash',Rule::unique('users')->ignore($user)],
            'name'=>['string','required','max:255'],
            'email'=>['string','required','email','max:255',Rule::unique('users')->ignore($user)],
            'password'=>['string','required','min:8','max:255','confirmed']
        ]);
        $user->update($attributes);
        return redirect($user->path());
    }

}
