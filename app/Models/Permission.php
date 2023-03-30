<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
{
    use HasFactory;
    public function children()
    {
        return $this->belongsToMany(PermissionChild::class, 'permissions_has_permission_childs', 'permission_id', 'permission_child_id');
    }


}
