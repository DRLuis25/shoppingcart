<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DetalleVentas
 * @package App\Models
 * @version February 15, 2021, 8:01 am UTC
 *
 * @property \App\Models\Ventum $venta
 * @property \App\Models\Product $product
 * @property integer $venta_id
 * @property integer $product_id
 * @property number $precio
 * @property number $cantidad
 * @property number $subtotal
 */
class DetalleVentas extends Model
{
    use SoftDeletes;

    public $table = 'venta_detalle';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'venta_id',
        'product_id',
        'precio',
        'cantidad',
        'subtotal'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'venta_id' => 'integer',
        'product_id' => 'integer',
        'precio' => 'float',
        'cantidad' => 'float',
        'subtotal' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'venta_id' => 'required',
        'product_id' => 'required',
        'precio' => 'required|numeric',
        'cantidad' => 'required|numeric',
        'subtotal' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function venta()
    {
        return $this->belongsTo(\App\Models\Ventum::class, 'venta_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function producto()
    {
        return $this->belongsTo(Productos::class, 'product_id');
    }
}
