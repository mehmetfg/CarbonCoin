<?php

namespace App\Models;

use App\Scopes\SortByIdDesc;
use App\Scopes\TenantScope;
use App\Traits\BelongsToTenant;
use App\Traits\SortNameInDescOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Vallet
 * @package App\Models
 * @version April 27, 2021, 3:14 pm UTC
 * @Owner Mehmet Fatih GÖÇGÜN
 * @property integer $dealer_id
 * @property integer $token_id
 * @property integer $user_id
 * @property string $name
 * @property string $public_key
 * @property string $private_key
 * @property string $id_card_number
 * @property number $balance
 * @property number $progress_payment
 */

class Vallet extends Model
{
    use SoftDeletes;
    use BelongsToTenant;
    use HasFactory;
    use SortNameInDescOrder;
    use LogsActivity;
    public $table = 'vallets';


    protected $dates = ['deleted_at'];

    protected static function booted()
    {

        static::creating(function ($model)
        {
            if(! auth()->guest())
            {
                $model->dealer_id = get_user_dealer_id();
            }
        });

    }

    public function powerStation()
    {
        return $this->hasOne(PowerStation::class);
    }
    public $fillable = [
        'dealer_id',
        'token_id',
        'user_id',
        'name',
        'public_key',
        'private_key',
        'id_card_number',
        'balance',
        'progress_payment'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dealer_id' => 'integer',
        'token_id' => 'integer',
        'user_id' => 'integer',
        'name' => 'string',
        'public_key' => 'string',
        'private_key' => 'string',
        'id_card_number' => 'string',
        'balance' => 'decimal:2',
        'progress_payment' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

        'token_id' => 'required',

    ];


}
