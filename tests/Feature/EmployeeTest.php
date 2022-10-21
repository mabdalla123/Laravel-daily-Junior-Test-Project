<?php

use App\Models\Company;
use App\Models\Employee;

use function Pest\Laravel\delete;
use function Pest\Laravel\get;
use function Pest\Laravel\post;
use function Pest\Laravel\put;

it("can Create an Employee",function(){
    
    $emp = Employee::factory([
        "company_id"=>Company::latest()->first()->id ?? Company::factory()
    ])->raw();
    $response = post("/api/employee/create",$emp);
    $response->assertStatus(200);
});

it("can  read an  Employee",function(){
    
    $emp = Employee::latest()->first();
    $response = get("/api/employee/".$emp->id);
    $response->assertStatus(200);
});

it("can  update an  Employee",function(){
    
    $emp = Employee::latest()->first();
    $empupdate = Employee::factory([
        "company_id"=>Company::latest()->first()->id ?? Company::factory()
    ])->raw();
    $response = put("/api/employee/".$emp->id,$empupdate);
    $response->assertStatus(200);
});

it("can  delete an  Employee",function(){
    
    $emp = Employee::latest()->first();
    $response = delete("/api/employee/".$emp->id);
    $response->assertStatus(200);
});
