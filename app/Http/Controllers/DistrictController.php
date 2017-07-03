<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\hd\District;
use App\hd\Country;

class DistrictController extends Controller
{
    //
     /**
     * 用户权限组
     * @var District
     * */
    protected $model_district;
    protected $model_country;

    /**
     * 依赖注入
     * @param District $district
     * */
    public function __construct(District $district,Country $country)
    {
        $this->model_district = $district;
        $this->model_country = $country;
    }

 	public function show($id)
    {
    	$data=$this->model_district->findOrFail($id);
    	return response()->json($data);
    }

    public function showCountry($id)
    {
    	$data=$this->model_country->findOrFail($id);
    	return response()->json($data);
    }
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $roles = $this->model_role->getRoleList(getSetting('admin_pages_length'));
        $data=$this->model_district->listHot();
        return response()->json($data);

    }

    public function listall()
    {
       // $roles = $this->model_role->getRoleList(getSetting('admin_pages_length'));
        $data=$this->model_district->listcc(10);
        return response()->json($data);
	}
}