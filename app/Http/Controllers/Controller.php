<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
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

