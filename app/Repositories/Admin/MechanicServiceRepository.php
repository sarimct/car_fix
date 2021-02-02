<?php

namespace App\Repositories\Admin;

use App\Models\MechanicService;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MechanicServiceRepository
 * @package App\Repositories\Admin
 * @version April 2, 2018, 9:11 am UTC
 *
 * @method MechanicService findWithoutFail($id, $columns = ['*'])
 * @method MechanicService find($id, $columns = ['*'])
 * @method MechanicService first($columns = ['*'])
 */
class MechanicServiceRepository extends BaseRepository
{
    /**
     * Configure the Model
     **/
    public function model()
    {
        return MechanicService::class;
    }
}
