<?php

namespace App\Http\Controllers\Api\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class Delete extends Controller
{
    public function __invoke(Employee $employee)
    {
        $employee->delete();
        return response([
            "message"=>"Item Deleted"
        ],200);
    }
}
