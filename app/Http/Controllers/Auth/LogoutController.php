<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class LogoutController extends Controller
{
    public function __invoke()
    {
        Auth::logout();

        session()->invalidate();

        return to_route('login')->with(['message' => 'Deslogado com sucesso!']);

    }
}