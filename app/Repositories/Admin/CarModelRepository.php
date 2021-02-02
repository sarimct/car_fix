<?php

namespace App\Repositories\Admin;

use App\Models\CarModel;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CarModelRepository
 * @package App\Repositories\Admin
 * @version July 14, 2018, 11:03 am UTC
 *
 * @method CarModel findWithoutFail($id, $columns = ['*'])
 * @method CarModel find($id, $columns = ['*'])
 * @method CarModel first($columns = ['*'])
*/
class CarModelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'car_maker_id',
        'title'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CarModel::class;
    }
}
