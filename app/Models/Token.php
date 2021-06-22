<?php

namespace App\Models;

use App\Scopes\SortByIdDesc;
use App\Traits\BelongsToTenant;
use App\Traits\SortNameInDescOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Token
 * @package App\Models
 * @version April 27, 2021, 3:04 pm UTC
 * @Owner Mehmet Fatih GÖÇGÜN
 * @property integer $dealer_id
 * @property string $name
 * @property string $symbol
 * @property integer $total_supply
 * @property integer $decimal
 * @property string $definition
 * @property string $description
 * @property string $owner_address
 * @property string $contract_address
 * @property string $status
 * @property boolean $is_active
 */

class Token extends Model
{
    use SoftDeletes;
    use BelongsToTenant;
    use HasFactory;
    use SortNameInDescOrder;
    use LogsActivity;
    public $table = 'tokens';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'dealer_id',
        'name',
        'symbol',
        'total_supply',
        'decimal',
        'definition',
        'description',
        'owner_address',
        'contract_address',
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
        'definition' => 'string',
        'description' => 'string',
        'owner_address' => 'string',
        'contract_address' => 'string',
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
