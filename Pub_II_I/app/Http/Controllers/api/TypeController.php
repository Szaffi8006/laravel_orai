<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Http\Resources\Type as TypeResource;
use App\Http\Controllers\api\ResponseController;


class TypeController extends ResponseController
{
    public function getTypes (){

        $types = Type::with("drink")->get();

        return $this->sendResponse(TypeResource:: collection ($types) , "Betöltve");
    }

    public function getType(Request $request){

        $type = Type::where("type", $request["type"])->first();

        return $this->sendResponse(new TypeResource($type), "Betöltve");
    }

    public function newType(Request $request){

        $type = new Type ();
        $type->type = $request["type"];

        $type->save();

        return $type;
    }

    public function updateType(Request $request){

        $type = $this->getType($request);
        $type->type = $request["type"];

        $type->update();

        return $type;
    }

    public function destroyType($id){

        $type = Type::find($id);

        $type->delete();
        
        return $type;
    }
}
