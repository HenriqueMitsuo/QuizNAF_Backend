<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends CrudController
{
    public function __construct(User $model, Request $request){
        $this->model = $model;
        $this->request = $request;
    }
}
