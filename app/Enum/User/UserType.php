<?php

namespace App\Enum\User;

enum UserType:int
{
    case Admin = 0;
    case    Client = 1;
}
