<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Hd\Doctor;

class HospitalController extends Controller
{
    //
    public function show($id)
    {
    	$data=Doctor::find(1);
    	return $data;
    }
}
