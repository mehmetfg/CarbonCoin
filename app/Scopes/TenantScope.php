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

class TenantScope implements \Illuminate\Database\Eloquent\Scope
{

    /**
     * @inheritDoc
     */
    public function apply(Builder $builder, Model $model)
    {

        if(! optional(auth_user())->isAdmin()) {
            $builder->whereIn('dealer_id', get_user_dealer_ids());
        }
    }
}
