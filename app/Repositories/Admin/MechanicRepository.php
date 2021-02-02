<?php

namespace App\Repositories\Admin;

use App\Models\Mechanic;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MechanicRepository
 * @package App\Repositories\Admin
 * @version November 15, 2018, 8:47 am UTC
 *
 * @method Mechanic findWithoutFail($id, $columns = ['*'])
 * @method Mechanic find($id, $columns = ['*'])
 * @method Mechanic first($columns = ['*'])
*/
class MechanicRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Mechanic::class;
    }
}
