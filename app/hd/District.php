<?php

namespace App\hd;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    protected $connection='db_hd';

    protected $table = 'tb_district';
	protected $primaryKey = 'id';

	public function listHot()
	{
		$data=$this->where('is_hot',1)->where('status',1)->get();
		return $data;
	}

	public function listcc($page)//,array $condition = [])//->where($condition)
	{
		$data=$this->where('status',1)->paginate($page);//->get();
		return $data;
	}

	/**
     * 创建用户组
     * @param object $request
     * */
    public function createDistrict($request)
    {
       /* $this->name = $request->name;
        $this->display_name = $request->display_name;
        $this->description = $request->description;
        $this->save();
        if (is_array($request->permission)) {
            $permissions = [];
            foreach ($request->permission as $id) {
                $permissions[] = Permission::findOrFail($id);
            }
            $this->attachPermissions($permissions);
        }*/
    }

     /**
     * 更新用户组
     * @param int $id
     * @param object $request
     * */
    public function updateRole($id, $request)
    {
        /*$district = self::findOrFail($id);
        $district->name = $request->name;
        $district->display_name = $request->display_name;
        $district->description = $request->description;
        $district->save();*/
        //清除以前的权限
        //$district->detachPermissions($district->perms);
        //写入新权限
       /* if (is_array($request->permission)) {
            $permissions = [];
            foreach ($request->permission as $id) {
                $permissions[] = Permission::findOrFail($id);
            }
            $district->attachPermissions($permissions);
        }*/
    }

     /**
     * 删除用户组
     * @param int $id
     * */
    public function deleteRole($id)
    {
        $district = District::findOrFail($id);
        // Force Delete
        //$role->users()->sync([]); // 同步清除角色下的用户关联
        //$role->perms()->sync([]); // 同步清除角色下的权限关联

        //$role->forceDelete(); // 删除角色
    }

    /**
     * 查询角色列表并分页
     * @param int $page 每页显示数据数量
     * @param array $condition 查询条件
     * */
    public function getDistrictList($page, array $condition = [])
    {
        return $this->where($condition)->paginate($page);
    }


}
