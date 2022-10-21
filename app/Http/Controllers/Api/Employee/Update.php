<?php

namespace App\Http\Controllers\Api\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Employee\UpdateEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class Update extends Controller
{
    public function __invoke(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->validated());

        return response([
            "data"=>$employee
        ],200);
    }
}
