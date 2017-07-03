<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CenterController extends Controller
{
    //show 
    public function show(Request $request,$id)
    {
    	
    	return response()
            ->json(['name' => 'Abigail', 'state' => 'CA'])
            ->withCallback($request->input('callback'));
    }
    //search
    //list
}
