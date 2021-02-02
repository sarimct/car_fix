<?php

namespace App\Repositories\Admin;

use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ReviewRepository
 * @package App\Repositories\Admin
 * @version July 14, 2018, 11:40 am UTC
 *
 * @method Review findWithoutFail($id, $columns = ['*'])
 * @method Review find($id, $columns = ['*'])
 * @method Review first($columns = ['*'])
 */
class ReviewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'quotation_id',
        'user_id',
        'rating',
        'comment'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Review::class;
    }

    public function storeRecord($request)
    {
        $input = $request->all();
        $userId = Auth::id();

        $data['quotation_id'] = $input['quotation_id'];
        $data['user_id'] = $userId;
        $data['rating'] = $input['rating'];
        $data['comment'] = $input['comment'];

        $review = $this->create($data);
        return $review;
    }
}
