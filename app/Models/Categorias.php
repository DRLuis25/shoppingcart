<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categorias
 * @package App\Models
 * @version February 6, 2021, 9:56 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $productos
 * @property string $descripcion
 */
class Categorias extends Model
{
    use SoftDeletes;

    public $table = 'categoria';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productos()
    {
        return $this->hasMany(\App\Models\Producto::class, 'categoria_id');
    }
}
