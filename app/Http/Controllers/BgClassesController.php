<?php

namespace App\Http\Controllers;

use App\Models\BgClass;
use Illuminate\Http\Request;

class BgClassesController extends Controller
{
    public function all() {
        return BgClass::all();
    }
}
