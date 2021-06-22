<?php
/**
 * Created by PhpStorm.
 * User: Mehmet F. GCGN
 * Date: 9.01.2021
 * Time: 16:11
 */

namespace App\Traits;


use App\Models\Role;


trait UserRole
{
    public function roles()
    {
        return $this->belongsToMany(Role::class, "role_user", "user_id")->withTimestamps();
    }
    public function assignRole($role)
    {
        $role = Role::whereIn("name",$role)->get();

        $this->roles()->sync($role);
    }

}
