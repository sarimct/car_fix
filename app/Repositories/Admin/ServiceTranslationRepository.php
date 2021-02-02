<?php

namespace App\Repositories\Admin;

use App\Models\ServiceTranslation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ServiceTranslationRepository
 * @package App\Repositories\Admin
 * @version July 13, 2018, 6:53 am UTC
 *
 * @method ServiceTranslation findWithoutFail($id, $columns = ['*'])
 * @method ServiceTranslation find($id, $columns = ['*'])
 * @method ServiceTranslation first($columns = ['*'])
*/
class ServiceTranslationRepository extends BaseRepository
{
    /**
     * Configure the Model
     **/
    public function model()
    {
        return ServiceTranslation::class;
    }
}
