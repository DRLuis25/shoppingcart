<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\User;

/**
 * Class UsuariosRepository
 * @package App\Repositories
 * @version February 11, 2021, 2:01 pm UTC
*/

class UsuariosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return User::class;
    }
}
