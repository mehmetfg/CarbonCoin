<?php

namespace App\Models;

use App\Scopes\PowerStationScope;
use App\Traits\BelongsToTenant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class PowerStation
 * @package App\Models
 * @version May 2, 2021, 5:55 pm UTC
 * @Owner Mehmet Fatih GÖÇGÜN
 * @property integer $dealer_id
 * @property integer $vallet_id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $country
 * @property string $city
 * @property string $address
 * @property string $web
 * @property string $tax_number
 * @property string $authorized
 * @property string $paid_date
 * @property string $description
 * @property integer $status
 * @property boolean $is_active
 * @property string $doc1
 * @property string $doc2
 * @property string $doc3
 * @property string $doc4
 */

class PowerStation extends Model
{
    use SoftDeletes;
    use BelongsToTenant;
    use HasFactory;
    use LogsActivity;


    public $table = 'power_stations';

    protected $dates = ['deleted_at'];

    public function vallet()
    {
        return $this->belongsTo(Vallet::class);
    }


    public $fillable = [
        'wallet_address',
        'dealer_id',
        'partner_id',
        'vallet_id',
        'installed_power',
        'name',
        'email',
        'phone',
        'country',
        'city',
        'address',
        'web',
        'tax_number',
        'authorized',
        'paid_date',
        'description',
        'status',
        'is_active',
        'doc1',
        'doc2',
        'doc3',
        'doc4'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dealer_id' => 'integer',
        'vallet_id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'country' => 'string',
        'city' => 'string',
        'address' => 'string',
        'web' => 'string',
        'installed_power' => 'decimal:2',
        'tax_number' => 'string',
        'authorized' => 'string',
        'paid_date' => 'date',
        'description' => 'string',
        'status' => 'integer',
        'is_active' => 'boolean',
        'doc1' => 'string',
        'doc2' => 'string',
        'doc3' => 'string',
        'doc4' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'installed_power' => 'required',
        "paid_date"=> 'required',
        'email' => 'required',
        'web' => 'required',
        'status' => 'required',
        'is_active' => 'required'
    ];


}
