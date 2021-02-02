<?php

namespace App\Repositories\Admin;

use App\Models\ThreadUser;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ThreadRepository
 * @package App\Repositories\Admin
 * @version April 2, 2018, 9:11 am UTC
 *
 * @method ThreadUser findWithoutFail($id, $columns = ['*'])
 * @method ThreadUser find($id, $columns = ['*'])
 * @method ThreadUser first($columns = ['*'])
 */
class ThreadUserRepository extends BaseRepository
{
    /**
     * Returns specified model class name.
     *
     * @return string
     */
    public function model()
    {
        return ThreadUser::class;
    }

    public function getThreadId($sender_id, $receiver_id)
    {
        return [];
    }
}
