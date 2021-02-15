<?php

namespace App\Repositories;

use App\Models\Ventas;
use App\Repositories\BaseRepository;

/**
 * Class VentasRepository
 * @package App\Repositories
 * @version February 15, 2021, 8:20 am UTC
*/

class VentasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ventas::class;
    }
}
