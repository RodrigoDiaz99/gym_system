<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionChild extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'permissions_id',

    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permissions_has_permission_childs', 'permission_child_id', 'permission_id');
    }
}
