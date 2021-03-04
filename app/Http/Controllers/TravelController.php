<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;
use App\Http\Controllers\Controller as Controller;
use App\Http\Resources\Travel as TravelResource;

class TravelController extends Controller {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travels = Travel::all();
    
        //return $this->sendResponse(TravelResource::collection($travels), 'Travels retrieved successfully.');
        return response()->json(["status" => "success", "count" => count($travels), "data" => $travels], 200);
    }

    
}