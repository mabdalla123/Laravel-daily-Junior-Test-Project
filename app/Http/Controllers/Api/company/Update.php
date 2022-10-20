<?php

namespace App\Http\Controllers\Api\company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Company\UpdateCompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class Update extends Controller
{
    public function __invoke(UpdateCompanyRequest $request,Company $company)
    {
        //create
        //upload the file
        $data = $request->validated();
        if ($request->hasFile("logo")) {
            $logo = $request->file("logo");
            $logo->storeAs("public/storage/images", $logo->getClientOriginalName());
            $data["logo"] = $logo->getClientOriginalName();
        }
        $company = $company->update($data);
        return response(
            [
                "data" => $company
            ],
            "200"
        );
    }
}
