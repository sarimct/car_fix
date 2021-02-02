<?php

namespace App\Repositories\Admin;

use App\Models\CountryTranslation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CountryTranslationRepository
 * @package App\Repositories\Admin
 * @version July 13, 2018, 6:53 am UTC
 *
 * @method CountryTranslation findWithoutFail($id, $columns = ['*'])
 * @method CountryTranslation find($id, $columns = ['*'])
 * @method CountryTranslation first($columns = ['*'])
*/
class CountryTranslationRepository extends BaseRepository
{
    /**
     * Configure the Model
     **/
    public function model()
    {
        return CountryTranslation::class;
    }
}
