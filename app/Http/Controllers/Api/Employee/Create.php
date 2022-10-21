<?php

namespace App\Http\Controllers\Api\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Employee\CreateEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class Create extends Controller
{
    public function __invoke(CreateEmployeeRequest $request)
    {
       $emp=  Employee::create($request->validated());

       return response(
        [
            "data"=>$emp
        ],200);
    }
}
