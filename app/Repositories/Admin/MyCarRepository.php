<?php

namespace App\Repositories\Admin;

use App\Models\MyCar;
use App\Models\RequestForQuotation;
use Illuminate\Support\Facades\Auth;
use InfyOm\Generator\Common\BaseRepository;
use Laracasts\Flash\Flash;

/**
 * Class MyCarRepository
 * @package App\Repositories\Admin
 * @version July 20, 2018, 7:34 am UTC
 *
 * @method MyCar findWithoutFail($id, $columns = ['*'])
 * @method MyCar find($id, $columns = ['*'])
 * @method MyCar first($columns = ['*'])
 */
class MyCarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'model_id',
        'registration_no',
        'year'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MyCar::class;
    }

    public function store($request)
    {
        $input = $request->all();
        $user = Auth::user();
        if (!isset($input['driver_id'])) {
            $input['driver_id'] = $user->id;
        } else {
            $input['driver_id'] = $request['driver_id'];
        }

        return $this->model->create($input);
    }

    public function destroy($id)
    {
        $count = RequestForQuotation::where('car_id', $id)->whereNotIn('status', [30])->count();
        #TODO: check this...!!!
        if ($count > 0) {
            $message = "This car contains some request so it can't be deleted.";
            //Flash::error('This car contains some request so it can\'t be deleted.');
            return $message;
        }

        $result = MyCar::find($id)->delete();
        //Flash::success('Car deleted successfully.');
        return 'Car deleted successfully.';
    }
}
