<?php

namespace App\Http\Controllers;

use App\Models\Features;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function index(){
        $features = Features::get();
        // dd($features);
        return view('pages.about',["features" => $features]);
    }
}
