<?php

namespace App\Http\Controllers;

// Add these two imports
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller
{
    // Add these two traits
    use AuthorizesRequests;
    use ValidatesRequests;
}