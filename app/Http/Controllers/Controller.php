<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use ValidatesRequests;

    public const HTTP_OK = 200;
    public const HTTP_CREATE_OK = 201;
    public const HTTP_UNPROCESSABLE_ENTITY = 422;
}
