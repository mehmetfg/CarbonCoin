<?php
/**
 * Created by PhpStorm.
 * User: Mehmet F. GCGN
 * Date: 28.12.2020
 * Time: 19:28
 */

namespace App\Traits;



use App\Models\Dealer;
use App\Scopes\TenantScope;
use App\Scopes\SortByIdDesc;

trait BelongsToTenant
{
    protected static function booted()
    {
        static::addGlobalScope(new SortByIdDesc(new TenantScope()));
        static::creating(function ($model)
        {
            if(! auth()->guest())
            {
                $model->dealer_id = get_user_dealer_id();
            }
        });

    }

    public function dealer()
    {
        return $this->belongsTo(Dealer::class);
    }


}
