<?php

namespace App\Repositories\Admin;

use App\Models\AreaTranslation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AreaTranslationRepository
 * @package App\Repositories\Admin
 * @version July 13, 2018, 6:53 am UTC
 *
 * @method AreaTranslation findWithoutFail($id, $columns = ['*'])
 * @method AreaTranslation find($id, $columns = ['*'])
 * @method AreaTranslation first($columns = ['*'])
*/
class AreaTranslationRepository extends BaseRepository
{
    /**
     * Configure the Model
     **/
    public function model()
    {
        return AreaTranslation::class;
    }
}
