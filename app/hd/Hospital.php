<?php

namespace App\hd;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
	protected $connection='db_hd';
    protected $table = 'tb_hospital';
	protected $primaryKey = 'id';
    /*protected $fillable = array('name_cn', 'name_native', 'name_short','f_type','country','f_status','f_level','service_type','studio_point_b','tel','email','studio_point_g','studio_address','sole','sort_record','is_top','msg_id','post_id','certified','certified_id','certified_time','star_score','star_count');*/
}
