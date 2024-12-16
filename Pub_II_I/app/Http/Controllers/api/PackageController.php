<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Http\Resources\Package as PackageResource;
use App\Http\Controllers\api\ResponseController;


class PackageController extends ResponseController
{
    public function getPackages (){

        $packages = Package::with("drink")->get();

        return $this->sendResponse(PackageResource:: collection ($packages) , "Betöltve");
    }

    public function getPackage(Request $request){

        $package = Package::where("package", $request["package"])->first();

        return $this->sendResponse(new PackageResource($package), "Betöltve");
    }

    public function newPackage(Request $request){

        $package = new Package ();
        $package->package = $request["package"];

        $package->save();

        return $package;
    }

    public function updatePackage(Request $request){

        $package = $this->getPackage($request);
        $package->package = $request["package"];

        $package->update();

        return $package;
    }

    public function destroyPackage($id){

        $package = Package::find($id);

        $package->delete();
        
        return $package;
    }
}
