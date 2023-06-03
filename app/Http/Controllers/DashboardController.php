<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $links = Link::paginate();
        return view('link.index', ['links' => $links]);
    }
}
