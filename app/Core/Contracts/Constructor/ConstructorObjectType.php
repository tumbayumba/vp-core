<?php

namespace App\Core\Contracts\Constructor;

enum ConstructorObjectType
{
    case CONSTRUCTION;
    case DETAIL;
    case OPERATION;
    case DECORATED_OBJECT;
}
