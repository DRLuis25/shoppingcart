<?php

namespace App\Repositories;

use App\Models\DetalleVentas;
use App\Repositories\BaseRepository;

/**
 * Class DetalleVentasRepository
 * @package App\Repositories
 * @version February 15, 2021, 8:01 am UTC
*/

class DetalleVentasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'venta_id',
        'product_id',
        'precio',
        'cantidad',
        'subtotal'
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
        return DetalleVentas::class;
    }
}
