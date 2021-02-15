<?php

namespace App;

use Gloudemans\Shoppingcart\Contracts\InstanceIdentifier;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable implements InstanceIdentifier
{
    use Notifiable;
    use HasRoles;
    use SoftDeletes;
    
    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'name',
        'last_name',
        'email',
        'direccion',
        'direccion2',
        'ciudad',
        'estado',
        'pais',
        'zip',
        'telefono',
        'password',
        'email_verified_at',
        'remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'direccion' => 'string',
        'direccion2' => 'string',
        'ciudad' => 'string',
        'estado' => 'string',
        'pais' => 'string',
        'zip' => 'string',
        'telefono' => 'string',
        'password' => 'string',
        'email_verified_at' => 'datetime',
        'remember_token' => 'string'
    ];
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'direccion' => 'string|max:255',
        'direccion2' => 'nullable|string|max:255',
        'ciudad' => 'nullable|string|max:255',
        'estado' => 'nullable|string|max:255',
        'pais' => 'nullable|string|max:255',
        'zip' => 'nullable|string|max:255',
        'telefono' => 'nullable|string|max:255',
        'password' => 'required|string|max:255',
        'email_verified_at' => 'nullable',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
    public static $updateRules = [
        'name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'direccion' => 'string|max:255',
        'direccion2' => 'nullable|string|max:255',
        'ciudad' => 'nullable|string|max:255',
        'estado' => 'nullable|string|max:255',
        'pais' => 'nullable|string|max:255',
        'zip' => 'nullable|string|max:255',
        'telefono' => 'nullable|string|max:255',
        'email_verified_at' => 'nullable',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * Get the unique identifier to load the Cart from.
     *
     * @return int|string
     */
    public function getInstanceIdentifier($options = null) {
        return $this->email;
    }

    /**
     * Get the global discount rate for this instance.
     *
     * @return int|string
     */
    public function getInstanceGlobalDiscount($options = null) {
        return 0;
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ventas()
    {
        return $this->hasMany(ventas::class, 'cliente_id');
    }
}
