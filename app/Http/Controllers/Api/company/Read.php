<?php

namespace App\Http\Controllers\Api\company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class Read extends Controller
{
    public function __invoke(Company $company)
    {
        return response(
            [
                "company"=>$company
            ],200);
    }
}
