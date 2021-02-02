<?php

namespace App\Repositories\Admin;

use App\Models\FindGarage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FindGarageRepository
 * @package App\Repositories\Admin
 * @version August 9, 2018, 9:44 am UTC
 *
 * @method FindGarage findWithoutFail($id, $columns = ['*'])
 * @method FindGarage find($id, $columns = ['*'])
 * @method FindGarage first($columns = ['*'])
*/
class FindGarageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FindGarage::class;
    }
}
