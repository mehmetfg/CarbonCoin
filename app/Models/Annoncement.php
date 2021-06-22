<?php

namespace App\Models;

use App\Scopes\TenantScope;
use App\Traits\BelongsToTenant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Annoncement
 * @package App\Models
 * @version May 2, 2021, 12:25 pm UTC
 * @Owner Mehmet Fatih GÖÇGÜN
 * @property integer $dealer_id
 * @property string $definition
 * @property string $message
 * @property string $finish_date
 */

class Annoncement extends Model
{
    use SoftDeletes;
    use BelongsToTenant;
    use HasFactory;
    use LogsActivity;
    public $table = 'annoncements';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'dealer_id',
        'definition',
        'message',
        'finish_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dealer_id' => 'integer',
        'definition' => 'string',
        'message' => 'string',
        'finish_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

        'definition' => 'required',
        'message' => 'required',
        'finish_date' => 'required'
    ];


}
