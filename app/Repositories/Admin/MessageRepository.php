<?php

namespace App\Repositories\Admin;

use App\Models\Message;
use App\Models\Thread;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MessageRepository
 * @package App\Repositories\Admin
 * @version July 30, 2018, 6:19 am UTC
 *
 * @method Thread findWithoutFail($id, $columns = ['*'])
 * @method Thread find($id, $columns = ['*'])
 * @method Thread first($columns = ['*'])
 */
class MessageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'created_by',
        'last_message_id',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Thread::class;
    }
}
