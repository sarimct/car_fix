<?php

namespace App\Repositories\Admin;

use App\Models\CarMaker;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CarMakerRepository
 * @package App\Repositories\Admin
 * @version July 14, 2018, 10:56 am UTC
 *
 * @method CarMaker findWithoutFail($id, $columns = ['*'])
 * @method CarMaker find($id, $columns = ['*'])
 * @method CarMaker first($columns = ['*'])
*/
class CarMakerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'title'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CarMaker::class;
    }
}
