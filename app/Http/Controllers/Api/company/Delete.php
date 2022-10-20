<?php

namespace App\Http\Controllers\Api\company;

use App\Http\Controllers\Controller;
use App\Models\Company;

class Delete extends Controller
{
    public function __invoke(Company $company)
    {
        $company->delete();
        return response(
            [
                "message" => "item deleted"
            ],
            200
        );
    }
}
