<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use KennedyOsaze\LaravelApiResponse\Concerns\RendersApiResponse;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests, RendersApiResponse;
}
