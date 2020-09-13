<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\Callbacks;
use App\Models\Question;

class QuestionsController extends CrudController
{
    public function __construct(Question $model, Request $request)
    {
        $this->model = $model;
        $this->request = $request;
    }

    protected function applyFilters(Request $request, $query)
    {        
        if ($request->has('quiz_id')) {
            $query->where('quiz_id', $request->quiz_id);
        }
    }

}
