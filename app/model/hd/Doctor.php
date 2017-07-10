<?php

namespace App\model\hd;

use Illuminate\Database\Eloquent\Model;
/*use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;*/

class Doctor extends Model  //implements Transformable
{
	//use TransformableTrait;
	protected $connection='db_hd';
	protected $table = 'tb_doctor';
	protected $primaryKey = 'id';
  /*  protected $fillable = array('name_cn', 'name_en', 'name_short','email','mobile','tel','f_type','country_id','gender','f_status','f_level','studio','studio_point_b','studio_point_g','studio_address','sole','sort_record','is_top','msg_id','post_id','certified','certified_id','certified_time','star_score','star_count','birthday');*/

    public function lista()
    {
        return $table::all();
    }

 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = [
        'name', 'email', 'password',
    ];*/
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /*protected $hidden = [
        'password', 'remember_token',
    ];*/
     /*
     * 1对1关联分类表
     * */
    /*public function categories()
    {
        return $this->belongsToMany('App\Models\ArticleCategory', 'article_cate')->using('App\Models\ArticleCate');
    }*/

    //const CREATED_AT = 'creation_date';
    //const UPDATED_AT = 'last_update';
}
