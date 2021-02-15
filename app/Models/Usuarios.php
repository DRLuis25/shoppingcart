<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class Usuarios
 * @package App\Models
 * @version February 11, 2021, 2:01 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $venta
 * @property string $name
 * @property string $last_name
 * @property string $email
 * @property string $direccion
 * @property string $direccion2
 * @property string $ciudad
 * @property string $estado
 * @property string $pais
 * @property string $zip
 * @property string $telefono
 * @property string $password
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $remember_token
 */
class Usuarios extends Model
{
    use SoftDeletes;
    use HasRoles;
    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



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
     * The attributes that should be casted to native types.
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function venta()
    {
        return $this->hasMany(\App\Models\Ventum::class, 'cliente_id');
    }
}
