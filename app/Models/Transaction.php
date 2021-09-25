<?php

namespace App\Models;

use App\Traits\BelongsToTenant;
use App\Traits\SortNameInDescOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Transaction
 * @package App\Models
 * @version April 27, 2021, 8:12 pm UTC
 * @Owner Mehmet Fatih GÖÇGÜN
 * @property integer $dealer_id
 * @property integer $vallet_id
 * @property integer $type
 * @property string $definition
 * @property string $description
 * @property string $address
 * @property number $quentity
 * @property string|\Carbon\Carbon $date
 */

class Transaction extends Model
{
    use SoftDeletes;

    use HasFactory;
    use LogsActivity;
    use SortNameInDescOrder;


    protected $attributes=["date"=> '2021-01-01', 'dealer_id'=> 1];
    protected $dates = ['deleted_at'];


    public function vallet()
    {
        return $this->belongsTo(Vallet::class);
    }
    public $fillable = [
        'period',
        'status',
        'hash',
        'dealer_id',
        'type',
        'definition',
        'description',
        'address',
        'quentity',
        'date'
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
        'definition' => 'string',
        'description' => 'string',
        'address' => 'string',
        'quentity' => 'decimal:6',
        'date' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

        'type' => 'required',
        'quentity' => 'required',

    ];


}
