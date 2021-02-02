<?php

namespace App\Repositories\Admin;

use App\Models\City;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CityRepository
 * @package App\Repositories\Admin
 * @version July 14, 2018, 11:28 am UTC
 *
 * @method City findWithoutFail($id, $columns = ['*'])
 * @method City find($id, $columns = ['*'])
 * @method City first($columns = ['*'])
*/
class CityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'country_id',
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return City::class;
    }
}
