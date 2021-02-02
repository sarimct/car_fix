<?php

namespace App\Repositories\Admin;

use App\Models\Area;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AreaRepository
 * @package App\Repositories\Admin
 * @version July 14, 2018, 11:29 am UTC
 *
 * @method Area findWithoutFail($id, $columns = ['*'])
 * @method Area find($id, $columns = ['*'])
 * @method Area first($columns = ['*'])
*/
class AreaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'city_id',
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Area::class;
    }
}
