<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function getPackages (){

        $packages = Package::with("package")->get();

        return response()->json(PackageResource::collection($drinks));
    }





}
