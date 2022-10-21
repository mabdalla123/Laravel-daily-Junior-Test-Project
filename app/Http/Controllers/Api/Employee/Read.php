<?php

namespace App\Http\Controllers\Api\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class Read extends Controller
{
    
    public function __invoke(Employee $employee)
    {
        return response([
            "employee"=>$employee
        ],200);
    }
}
