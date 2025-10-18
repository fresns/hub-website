<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
    {
        // code
    }

    public function createSuccess()
    {
        return $this->successResponse('create');
    }

    public function updateSuccess()
    {
        return $this->successResponse('update');
    }

    public function deleteSuccess()
    {
        return $this->successResponse('delete');
    }

    public function successResponse($action)
    {
        return request()->ajax() ? response()->json(['message' => __('tips.'.$action.'Success')]) : back()->with('success', __('tips.'.$action.'Success'));
    }
}
