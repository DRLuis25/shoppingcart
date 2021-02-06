<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Productos
 * @package App\Models
 * @version February 6, 2021, 10:16 pm UTC
 *
 * @property \App\Models\Categorium $categoria
 * @property \Illuminate\Database\Eloquent\Collection $venta
 * @property string $descripcion
 * @property string $foto
 * @property integer $stock
 * @property number $precio
 * @property integer $categoria_id
 */
class Productos extends Model
{
    use SoftDeletes;

    public $table = 'producto';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'descripcion',
        'foto',
        'stock',
        'precio',
        'categoria_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string',
        'foto' => 'string',
        'stock' => 'integer',
        'precio' => 'float',
        'categoria_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required|string|max:255',
        'foto' => 'required|string|max:255',
        'stock' => 'required|integer',
        'precio' => 'required|numeric',
        'categoria_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function categoria()
    {
        return $this->belongsTo(\App\Models\Categorium::class, 'categoria_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function venta()
    {
        return $this->belongsToMany(\App\Models\Ventum::class, 'venta_detalle');
    }
}
