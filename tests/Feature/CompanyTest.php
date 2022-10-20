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

    
    Company::latest();
    $response = get("api/company/".Company::latest()->first()->id);
    $response->assertStatus(200);

});


it("can Update a Company",function(){

    
    $response = put("api/company/".Company::latest()->first()->id,Company::factory()->raw());
    $response->assertStatus(200);

});


it("can delete a Company",function(){

    
    $response = get("api/company/".Company::latest()->first()->id);
    $response->assertStatus(200);

});
