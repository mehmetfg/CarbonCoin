<?php

namespace App\Models;

use App\Traits\BelongsToTenant;
use App\Traits\SortNameInDescOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Message
 * @package App\Models
 * @version April 27, 2021, 2:43 pm UTC
 * @Owner Mehmet Fatih GÖÇGÜN
 * @property integer $user_id
 * @property string $title
 * @property string $message
 * @property string $file
 */

class Message extends Model
{
    use SoftDeletes;
    use BelongsToTenant;
    use HasFactory;
    use LogsActivity;
    use SortNameInDescOrder;
    public $table = 'messages';


    protected $dates = ['deleted_at'];

    protected $attributes=["user_id"=> 1];

    public $fillable = [
        'user_id',
        'title',
        'message',
        'file'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'title' => 'string',
        'message' => 'string',
        'file' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

        'title' => 'required',
        'message' => 'required'
    ];


}
