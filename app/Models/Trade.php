<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Trade
 * @package App\Models
 * @version September 20, 2021, 3:57 pm +03
 * @Owner Mehmet Fatih GÖÇGÜN
 * @property integer $dealer_id
 * @property integer $exchange_id
 * @property integer $type
 * @property string $asset_pair_name
 * @property number $price
 * @property number $amount
 * @property string $taker_side
 * @property integer $maker_order_id
 * @property integer $taker_order_id
 * @property number $maker_fee
 * @property number $taker_fee
 * @property string $side
 */

class Trade extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'trades';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id',
        'dealer_id',
        'exchange_id',
        'type',
        'asset_pair_name',
        'price',
        'amount',
        'taker_side',
        'maker_order_id',
        'taker_order_id',
        'maker_fee',
        'taker_fee',
        'side',
        'inserted_at'
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
        'asset_pair_name' => 'string',
        'price' => 'decimal:2',
        'amount' => 'decimal:2',
        'taker_side' => 'string',
        'maker_order_id' => 'integer',
        'taker_order_id' => 'integer',
        'maker_fee' => 'decimal:2',
        'taker_fee' => 'decimal:2',
        'side' => 'string',
        'inserted_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'dealer_id' => 'required',
        'exchange_id' => 'required',
        'type' => 'required'
    ];


}
