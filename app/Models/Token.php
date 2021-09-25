<?php

namespace App\Models;

use App\Traits\SortNameInDescOrder;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Token
 * @package App\Models
 * @version September 18, 2021, 4:07 pm +03
 * @Owner Mehmet Fatih GÖÇGÜN
 * @property integer $dealer_id
 * @property string $name
 * @property string $symbol
 * @property integer $total_supply
 * @property integer $decimal
 * @property string $owner_address
 * @property string $contract_address
 * @property string $usd_price
 * @property string $description
 * @property string $main_abi
 * @property string $sub_abi
 * @property string $status
 * @property boolean $is_active
 */

class Token extends Model
{
    use SoftDeletes;
    use SortNameInDescOrder;
    use HasFactory;

    public $table = 'tokens';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'dealer_id',
        'name',
        'symbol',
        'total_supply',
        'decimal',
        'owner_address',
        'contract_address',
        'usd_price',
        'description',
        'main_abi',
        'sub_abi',
        'status',
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
        'name' => 'string',
        'symbol' => 'string',
        'total_supply' => 'integer',
        'decimal' => 'integer',
        'owner_address' => 'string',
        'contract_address' => 'string',
        'usd_price' => 'string',
        'description' => 'string',
        'main_abi' => 'array',
        'sub_abi' => 'array',
        'status' => 'string',
        'is_active' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

        'name' => 'required',
        'is_active' => 'required'
    ];


}
