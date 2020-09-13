<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersController extends CrudController
{
    public function __construct(User $model, Request $request)
    {
        $this->model = $model;
        $this->request = $request;
    }

    /**
     *! @Overriding @store() Method.
     */ 
    public function store()
    {
        $this->validate($this->request, $this->getValidationRules());

        $newUser = $this->model;

        $newUser->name = $this->request->name;
        $newUser->email = $this->request->email;
        $newUser->password = Hash::make($this->request->password);
        $newUser->country = $this->request->country;
        $newUser->city = $this->request->city;
        $newUser->educationType = $this->request->educationType;
        $newUser->educationInstitute = $this->request->educationInstitute;
        $newUser->educationCourse = $this->request->educationCourse;
        $newUser->save();

        return response()->json('User Created!', 201);
    }

    /**
     *! @Overriding @getValidationRules() Method.
     */
    public function getValidationRules() 
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'country' => 'required|max:255',
            'city' => 'required|max:255',
            'educationType'  => 'required|max:255',
            'educationInstitute'  => 'required|max:255',
            'educationCourse' => 'max:255',
        ];
    }
}
