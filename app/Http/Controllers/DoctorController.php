<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Hd\Doctor;

class DoctorController extends Controller
{
    //show
    public function show(Request $request,$id)
    {
		
        //$data=Doctor->lista();//find($id)
        $data=Doctor::find($id);
        //$response = response()->json($data);
        return response()->json($data);
        /*return response()
            ->json(['name' => 'Abigail', 'state' => 'CA'])
            ->withCallback($request->input('callback'));;*/
    }

    //list
    public function getlista(Request $request)
    {
    	$data=Doctor::all();//where("id",1);
    	/*return response()
            ->json(['name' => 'Request Abigail', 'state' => 'CA'])
            ->withCallback($request->input('callback'));*/
		$response = response()->json($data);
        return $response;
    }
}
