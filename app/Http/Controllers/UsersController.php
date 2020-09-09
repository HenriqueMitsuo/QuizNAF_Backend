<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function __construct(User $model, Request $request){
        $this->model = $model;
        $this->request = $request;
    }
}
