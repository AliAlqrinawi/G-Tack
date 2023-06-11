<?php

namespace App\Http\Controllers\API\V1\Customer;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReasonCollection;
use App\Models\Reason;
use Illuminate\Http\Request;

class ReasonsController extends Controller
{
    public function __invoke(Request $request)
    {
        $type = $request->type;
        $context = $request->context;
        $reasons = Reason::where('status' , 'ACTIVE')
        ->where('type' , 'CUSTOMER')
        ->when($context , function ($q) use($context){
            $q->where('context' , $context);
        })
        ->get();
        return (new ReasonCollection($reasons))->additional(['message' => 'تمت العملية بنجاح']);
    }
}
