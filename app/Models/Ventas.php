<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ventas
 * @package App\Models
 * @version February 15, 2021, 8:20 am UTC
 *
 * @property \App\Models\User $cliente
 * @property \Illuminate\Database\Eloquent\Collection $products
 * @property integer $cliente_id
 * @property string $ccname
 * @property string $ccnumber
 * @property string $cc
 * @property string $direccion
 * @property number $subtotal
 * @property number $envio
 * @property number $otros
 * @property number $total
 * @property string $estado
 */
class Ventas extends Model
{
    use SoftDeletes;

    public $table = 'venta';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cliente_id',
        'ccname',
        'ccnumber',
        'cc',
        'direccion',
        'subtotal',
        'envio',
        'otros',
        'total',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cliente_id' => 'integer',
        'ccname' => 'string',
        'ccnumber' => 'string',
        'cc' => 'string',
        'direccion' => 'string',
        'subtotal' => 'float',
        'envio' => 'float',
        'otros' => 'float',
        'total' => 'float',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cliente_id' => 'required',
        'ccname' => 'required|string|max:255',
        'ccnumber' => 'required|string|max:255',
        'cc' => 'required|string|max:255',
        'direccion' => 'required|string|max:255',
        'subtotal' => 'required|numeric',
        'envio' => 'nullable|numeric',
        'otros' => 'nullable|numeric',
        'total' => 'required|numeric',
        'estado' => 'required|string|max:1',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cliente()
    {
        return $this->belongsTo(\App\Models\User::class, 'cliente_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function products()
    {
        return $this->belongsToMany(\App\Models\Product::class, 'venta_detalle');
    }
    
    /**
     * Get all of the detalle for the Ventas
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalle()
    {
        return $this->hasMany(DetalleVentas::class, 'venta_id', 'id');
    }
}
