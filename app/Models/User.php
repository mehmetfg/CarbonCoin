<?php

namespace App\Models;

use App\Traits\BelongsToTenant;
use App\Traits\SortNameInDescOrder;
use Eloquent as Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\Traits\LogsActivity;

class User extends Authenticatable
{
    use SoftDeletes;

    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use LogsActivity;
    use SortNameInDescOrder;
    use TwoFactorAuthenticatable;

    public $table = 'users';


    protected $dates = ['deleted_at'];


    const ADMIN = 1;
    const DEALER = 2;
    const PARTNER= 3;
    const CUSTOMER = 4;

    public function vallets()
    {
        return $this->hasMany(Vallet::class);
    }
    public $fillable = [
        'dealer_id',
        'type',
        'name',
        'email',
        'password',
        'phone',
        'address',
        'tax_number',
        'authorized',
        'web',
        'logo',
        'width',
        'favicon',
        'status',
        'language',
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
        'type' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'tax_number' => 'string',
        'authorized' => 'string',
        'web' => 'string',
        'logo' => 'string',
        'width' => 'string',
        'favicon' => 'string',
        'status' => 'integer',
        'language' => 'string',
        'is_active' => 'boolean',
        'email_verified_at' => 'datetime',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'dealer_id' => 'required',
        'type' => 'required',
        'name' => 'required',
        'email' => 'required',
        'status' => 'required',
        'language' => 'required',
        'is_active' => 'required'
    ];

    protected $appends = [
        'profile_photo_url',
    ];
    public function isAdmin(){
        return $this->type==self::ADMIN;
    }
    public function isDealer(){
        return
            $this->type==self::DEALER;
    }
    public function isPartner(){
        return

            $this->type==self::PARTNER
            ||
            $this->type==self::ADMIN ;
    }

    public function isCustomer(){
        return
            $this->type==self::CUSTOMER
            ||
            $this->type==self::ADMIN ;
    }
}
