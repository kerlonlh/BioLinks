<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
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

        $data = $request->validated();

        if ($file = $request->photo) {
            $data['photo'] = $file->store('photos');
        }

        $user->fill($data)->save();

        return back()->with(['message' => 'Perfil atualizado com sucesso!']);
    }
}