<?php
/**
 * Created by PhpStorm.
 * User: Mehmet F. GCGN
 * Date: 10.04.2021
 * Time: 17:08
 */

namespace App\Scopes;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class PowerStationScope implements \Illuminate\Database\Eloquent\Scope
{



    public function apply(Builder $builder, Model $model)
    {
        if(auth_user()->isPartner()) {
            $builder->where("partner_id", auth_user()->id);
        }

    }
}
