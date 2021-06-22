<?php

namespace App\Models;

use App\Scopes\TenantScope;
use App\Scopes\User\DealerScope;
use App\Scopes\User\PartnerScope;
use App\Traits\BelongsToTenant;
use App\Traits\SortNameInDescOrder;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Partner
 * @package App\Models
 * @version May 1, 2021, 12:51 pm UTC
 * @Owner Mehmet Fatih GÖÇGÜN
 * @property integer $dealer_id
 * @property integer $type
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property string $address
 * @property string $tax_number
 * @property string $authorized
 * @property string $web
 * @property string $logo
 * @property string $width
 * @property string $favicon
 * @property integer $status
 * @property string $language
 * @property boolean $is_active
 */

class Partner extends Model
{
    use SoftDeletes;
    use BelongsToTenant;
    use HasFactory;
    use LogsActivity;
    use SortNameInDescOrder;
    public $table = 'users';


    protected $dates = ['deleted_at'];

    protected $attributes=["type"=> 3];
    protected static function booted()
    {
        static::addGlobalScope(new PartnerScope(new TenantScope()));
        static::creating(function ($model)
        {
            if(auth_user()) {
                $model->dealer_id = auth_user()->id;
            }
        });
    }
    public $fillable = [
        'dealer_id',
        'type',
        'name',
        'email',
        'password',
        'phone',
        'address',
        'tax_number',
        'authorized',
        'web',
        'logo',
        'width',
        'favicon',
        'status',
        'language',
        'is_active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dealer_id' => 'integer',
        'type' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'tax_number' => 'string',
        'authorized' => 'string',
        'web' => 'string',
        'logo' => 'string',
        'width' => 'string',
        'favicon' => 'string',
        'status' => 'integer',
        'language' => 'string',
        'is_active' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [


        'name' => 'required',
        'email' => 'required',

    ];


}
