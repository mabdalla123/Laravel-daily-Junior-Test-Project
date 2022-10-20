<?php

namespace App\Http\Controllers\Api\company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Company\CreateCompanyRequest;
use App\Models\Company;



class Create extends Controller
{
    public function __invoke(CreateCompanyRequest $request)
    {
        //create
        //upload the file
        if ($request->hasFile("logo")) {
            $logo = $request->file("logo");
            $logo->storeAs("/public", $logo->getClientOriginalName());
            $data = $request->validated();
            $data["logo"] = $logo->getClientOriginalName();
            $company = Company::create($data);
            return response(
                [
                    "data" => $company
                ],
                "200"
            );
        }
    }
}
