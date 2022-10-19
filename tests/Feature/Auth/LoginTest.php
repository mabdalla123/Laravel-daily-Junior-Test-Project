<?php

use App\Enum\User\UserType;
use App\Models\User;

use function Pest\Laravel\get;
use function Pest\Laravel\post;
use function Pest\Laravel\postJson;
use function PHPUnit\Framework\assertTrue;

it('has /api/login End Point', function () {

    $response = post("/api/login");
    $response->assertStatus(302);
});

it("can login an Admin User", function () {

    $user = User::factory([
        "userType"=>UserType::Admin
    ])->create();

    $response = postJson("/api/login",[
        "email"=>$user->email,
        "password"=>"password"
    ]);

    $response->assertStatus(200);
});
