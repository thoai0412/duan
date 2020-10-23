<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends \Eloquent implements Authenticatable
{
    use SoftDeletes;
    use AuthenticableTrait;
    protected $fillable = [
        'name', 'email', 'password',
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }
    public function checkPermissionAccess($permissionCheck){
        
        // user login có quyền add, sửa danh mục và xem menu
        $roles = auth()->user()->roles;
        //vi role co nhieu quyen nen ta phai foreach
        foreach ($roles as $role)
        {
            $permissions = $role->permissions;
            if($permissions->contains('key_code',$permissionCheck)
            ){
                return true;
            }
        }
        return false;
        // return true; demo cap quen truy cap category
        // lấy được tất cả các quyền của user đang login hệ thống
        // kiểm tra quyền user và cấp quyền truy cập hoặc không cấp quyền
    }
    
}
