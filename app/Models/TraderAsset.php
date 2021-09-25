<?php

namespace App\Models;

use Carbon\Carbon;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class TraderAsset
 * @package App\Models
 * @version September 24, 2021, 12:14 am +03
 * @Owner Mehmet Fatih GÖÇGÜN
 * @property integer $trader_id
 * @property integer $exchange_id
 * @property string $asset_symbol
 * @property number $balance
 * @property number $locked_balance
 */

class TraderAsset extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'trader_assets';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'type',
        'trader_id',
        'exchange_id',
        'asset_symbol',
        'balance',
        'locked_balance'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'trader_id' => 'integer',
        'exchange_id' => 'integer',
        'asset_symbol' => 'string',
        'balance' => 'decimal:2',
        'locked_balance' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'trader_id' => 'required',
        'exchange_id' => 'required',
        'asset_symbol' => 'required'
    ];


}
