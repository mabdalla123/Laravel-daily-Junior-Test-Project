<?php

use App\Models\Company;
use Illuminate\Http\UploadedFile;

use function Pest\Laravel\get;
use function Pest\Laravel\post;
use function Pest\Laravel\postJson;
use function Pest\Laravel\put;

it('Can create a Company', function () {
    $companyItem = Company::factory()->raw();
    // dd($companyItem);
    $response = post("/api/company/create", $companyItem);
    $response->assertStatus(200);
});

it("can Read a Company",function(){

    
    $company = Company::latest()?? Company::factory()->create();
    $response = get("api/company/".$company->first()->id);
    $response->assertStatus(200);

});


it("can Update a Company",function(){

    $company = Company::latest()?? Company::factory()->create();
    
    $response = put("api/company/".$company->id,Company::factory()->raw());
    $response->assertStatus(200);

});


it("can delete a Company",function(){

    $company = Company::latest()?? Company::factory()->create();
    
    $response = get("api/company/".$company->id);
    $response->assertStatus(200);

});
