<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileRequest;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile', [
            'user' => Auth::user(),
        ]);

    }

    public function update(ProfileRequest $request) {
        /** @var User $user */

        $user = Auth::user();

        $user->fill($request->validated())
            ->save();

        return back()->with(['message' => 'Perfil atualizado com sucesso!']);
    }
}