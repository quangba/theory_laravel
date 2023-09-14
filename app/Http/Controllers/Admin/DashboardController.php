<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct() {
        echo "INIT DashboardController";
        // Sử dụng session để check login;
    }

    public function index() {
        return "<h2>DashboardController</h2>";
    }
}
