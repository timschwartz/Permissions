<?php
namespace timschwartz\Permissions;

use timschwartz\Permissions\models\Permission;
use Auth;

trait PermissionTrait
{
    public function check_permission($permission)
    {
        if(Permission::where('user_id', Auth::id())->where('target', $this->target)
                     ->where('permission', $permission)->first()) return true;
        else return false;
    }

    public function permissions($id = 0)
    {
        if($id == 0) $id = Auth::id();
        return Permission::where('user_id', $id)->get();
    }
}
?>
