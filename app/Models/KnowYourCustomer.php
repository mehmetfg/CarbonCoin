<?php

namespace App\Models;

use App\Traits\BelongsToTenant;
use App\Traits\SortNameInDescOrder;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class KnowYourCustomer
 * @package App\Models
 * @version April 27, 2021, 8:04 pm UTC
 * @Owner Mehmet Fatih GÖÇGÜN
 * @property integer $dealer_id
 * @property integer $user_id
 * @property string $name
 * @property string $surname
 * @property string $birthday
 * @property string $id_card_serial
 * @property string $id_card_number
 * @property string $status
 * @property string $is_active
 */

class KnowYourCustomer extends Model
{
    use SoftDeletes;
    use BelongsToTenant;
    use HasFactory;
    use LogsActivity;
    use SortNameInDescOrder;
    public $table = 'know_your_customers';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'dealer_id',
        'user_id',
        'name',
        'surname',
        'birthday',
        'id_card_serial',
        'id_card_number',
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
        'user_id' => 'integer',
        'name' => 'string',
        'surname' => 'string',
        'birthday' => 'date',
        'id_card_serial' => 'string',
        'id_card_number' => 'string',
        'status' => 'string',
        'is_active' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'surname' => 'required',
        'birthday' => 'required',
        'id_card_serial' => 'required',
        'id_card_number' => 'required'
    ];


}
