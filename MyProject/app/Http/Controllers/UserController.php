<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function access()
    {
        $user = Auth::user();

        if ($user->isAdmin()){
            return 'you are logged in as admin';

        } elseif ($user->isManager()){
            return 'you are logged in as manager';
        } elseif ($user->isAssistant()){
            return 'you are logged in as assistant';
        }else{
            return 'you are logged in as' . $user->name;
        }
    }

    public function board()
    {
        $user = Auth::user();

        $orders = $user->orders()->get();

        return view('dashboard', ['orders' => $orders]);
    }
}

