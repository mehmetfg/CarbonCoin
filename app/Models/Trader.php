<?php

namespace App\Models;

use App\Traits\BelongsToTenant;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Trader
 * @package App\Models
 * @version September 19, 2021, 9:50 pm +03
 * @Owner Mehmet Fatih GÖÇGÜN
 * @property integer $dealer_id
 * @property integer $exchange_id
 * @property integer $type
 * @property string $name
 * @property string $secret_key
 * @property string $public_key
 */

class Trader extends Model
{
    use SoftDeletes;

    use HasFactory;
    use BelongsToTenant;
    public $table = 'traders';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'dealer_id',
        'exchange_id',
        'type',
        'name',
        'secret_key',
        'public_key'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dealer_id' => 'integer',
        'exchange_id' => 'integer',
        'type' => 'integer',
        'name' => 'string',
        'secret_key' => 'string',
        'public_key' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

        'exchange_id' => 'required',

        'name' => 'required'
    ];


}
