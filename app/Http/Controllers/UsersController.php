<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Signer\Key;
use Lcobucci\JWT\Signer\Hmac\Sha256;


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
        $newUser->role = $this->request->role;
        $newUser->save();

        return response()->json(['message' => 'User Created'], 201);
    }

    public function login()
    {
        $this->validate($this->request, [
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',
        ]);

        $user = $this->model;
        $userObj = $user::firstWhere('email', $this->request->email);
        
        if (Hash::check($this->request->password, $userObj->password)) {
            $jwt_signer = new Sha256;
            $jwt_secret = env('JWT_KEY');
            $current_time = time();

            $jwt_token = (new Builder())
                ->withClaim("id", $userObj->id)
                ->withClaim("name", $userObj->name)
                ->withClaim("email", $userObj->email)
                ->withClaim("country", $userObj->country)
                ->withClaim("city", $userObj->city)
                ->withClaim("educationType", $userObj->educationType)
                ->withClaim("educationInstitute", $userObj->educationInstitute)
                ->withClaim("educationCourse", $userObj->educationCourse)
                ->withClaim("role", $userObj->role)
                ->issuedAt($current_time)
                ->expiresAt($current_time + 3600)
                ->getToken($jwt_signer, new Key($jwt_secret));

            return response()->json(['message' => 'User logged in', 'token' => strval($jwt_token)], 201); 
        }
        else {
            return response()->json(['message' => 'Authentication Error'], 401);
        }
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
