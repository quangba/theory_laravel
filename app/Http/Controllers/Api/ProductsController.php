<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function showAll() {
        return "<h2>ProductsController API</h2>";
    }
}
