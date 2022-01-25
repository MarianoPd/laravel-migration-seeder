<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PakagesController extends Controller
{
    public function index(){
        $packages = Package::all();
        return view('packages', compact('packages'));
    }
}
