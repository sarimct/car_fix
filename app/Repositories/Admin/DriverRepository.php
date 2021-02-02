<?php

namespace App\Repositories\Admin;

use App\Models\Driver;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DriverRepository
 * @package App\Repositories\Admin
 * @version November 15, 2018, 8:56 am UTC
 *
 * @method Driver findWithoutFail($id, $columns = ['*'])
 * @method Driver find($id, $columns = ['*'])
 * @method Driver first($columns = ['*'])
*/
class DriverRepository extends BaseRepository
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
        return Driver::class;
    }
}
