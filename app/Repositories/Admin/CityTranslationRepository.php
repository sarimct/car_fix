<?php

namespace App\Repositories\Admin;

use App\Models\CityTranslation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CityTranslationRepository
 * @package App\Repositories\Admin
 * @version July 13, 2018, 6:53 am UTC
 *
 * @method CityTranslation findWithoutFail($id, $columns = ['*'])
 * @method CityTranslation find($id, $columns = ['*'])
 * @method CityTranslation first($columns = ['*'])
*/
class CityTranslationRepository extends BaseRepository
{
    /**
     * Configure the Model
     **/
    public function model()
    {
        return CityTranslation::class;
    }
}
