<?php

namespace App\Repositories\Admin;

use App\Models\ThreadMessage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ThreadMessageRepository
 * @package App\Repositories\Admin
 * @version April 2, 2018, 9:11 am UTC
 *
 * @method ThreadMessage findWithoutFail($id, $columns = ['*'])
 * @method ThreadMessage find($id, $columns = ['*'])
 * @method ThreadMessage first($columns = ['*'])
 */
class ThreadMessageRepository extends BaseRepository
{
    /**
     * Returns specified model class name.
     *
     * @return string
     */
    public function model()
    {
        return ThreadMessage::class;
    }
}
