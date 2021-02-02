<?php

namespace App\Repositories\Admin;

use App\Models\JobHistory;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobHistoryRepository
 * @package App\Repositories\Admin
 * @version August 4, 2018, 6:10 am UTC
 *
 * @method JobHistory findWithoutFail($id, $columns = ['*'])
 * @method JobHistory find($id, $columns = ['*'])
 * @method JobHistory first($columns = ['*'])
*/
class JobHistoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'car_id',
        'area_id',
        'service_id',
        'with_in_time',
        'notes',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobHistory::class;
    }
}
