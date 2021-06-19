<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('is_admin')->except('index');
    }
    public function index(){
        if(User::count()== 0){
            $data = [
                'name' => 'Super Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('adminpass'),
                'u_type' => 'ADM',
            ];
            User::create($data);
        }

        return view('welcome');
    }
}
