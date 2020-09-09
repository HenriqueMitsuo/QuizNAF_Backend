<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionsController extends CrudController
{
    public function __construct(Question $model, Request $request){
        $this->model = $model;
        $this->request = $request;
    }
}
