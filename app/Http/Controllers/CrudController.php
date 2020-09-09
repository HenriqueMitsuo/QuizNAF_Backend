<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

abstract class CrudController extends Controller
{
    protected $model;
    protected $request;

    public function index()
    {
        return response()->json($this->model::all());
    }

    public function show($id)
    {
        return response()->json($this->model::find($id));
    }

    public function store()
    {
        $model = $this->model::create($this->request->all());

        return response()->json($model, 201);
    }

    public function update($id)
    {
        $model = $this->model::findOrFail($id);
        $model->update($this->request->all());

        return response()->json($model, 200);
    }

    public function delete($id)
    {
        $this->model::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
