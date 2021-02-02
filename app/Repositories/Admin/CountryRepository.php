<?php

namespace App\Repositories\Admin;

use App\Models\Country;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CountryRepository
 * @package App\Repositories\Admin
 * @version July 14, 2018, 11:26 am UTC
 *
 * @method Country findWithoutFail($id, $columns = ['*'])
 * @method Country find($id, $columns = ['*'])
 * @method Country first($columns = ['*'])
*/
class CountryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Country::class;
    }
}
