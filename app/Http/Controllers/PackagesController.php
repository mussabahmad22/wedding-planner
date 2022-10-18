<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class PackagesController extends Controller
{
    public function packagesdetail(){

        $packages = Package::all();
        return view('packagesdetail',compact('packages'));
    }
    public function signup(){

        return view('signup');
        
    }
}
