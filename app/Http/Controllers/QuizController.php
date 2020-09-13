<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends CrudController
{
    public function __construct(Quiz $model, Request $request){
        $this->model = $model;
        $this->request = $request;
    }
}
