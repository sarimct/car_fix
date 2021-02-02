<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer id
 * @property integer quotation_request_id
 * @property integer mechanic_id
 * @property integer status
 *
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 *
 * @property RequestForQuotation requests
 * @property User mechanic
 *
 * //@SWG\Definition(
 *      definition="RequestForQuotation",
 *      required={"mechanic_id", "quotation_request_id", "status"},
 *      //@SWG\Property(
 *          property="mechanic_id",
 *          description="mechanic_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      //@SWG\Property(
 *          property="quotation_request_id",
 *          description="quotation_request_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      //@SWG\Property(
 *          property="status",
 *          description="status",
 *          type="integer",
 *          default=10
 *      )
 * )
 */
class RequestForQuotationPending extends Model
{
    use SoftDeletes;

    public $table = 'quotation_request_pending';
    protected $dates = ['deleted_at'];

    /**
     * Status Enum
     */

    public $fillable = [
        'quotation_request_id',
        'mechanic_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [

    ];

    /**
     * The objects that should be append to toArray.
     *
     * @var array
     */
    protected $with = [];

    /**
     * The attributes that should be append to toArray.
     *
     * @var array
     */
    protected $appends = [];

    /**
     * The attributes that should be visible in toArray.
     *
     * @var array
     */
    protected $visible = [];

    /**
     * Validation create rules
     *
     * @var array
     */
    public static $rules = [
        'quotation_request_id' => 'required|exists:quotation_requests,id',
        'mechanic_id'          => 'required|exists:user,id'
    ];

    /**
     * Validation update rules
     *
     * @var array
     */
    public static $update_rules = [
        'quotation_request_id' => 'required|exists:quotation_requests,id',
        'mechanic_id'          => 'required|exists:user,id'
    ];

    /**
     * Validation api rules
     *
     * @var array
     */
    public static $api_rules = [
        'quotation_request_id' => 'required|exists:quotation_requests,id',
        'mechanic_id'          => 'required|exists:user,id'
    ];

    public function requests()
    {
        return $this->belongsTo(RequestForQuotation::class);
    }

    public function mechanic()
    {
        return $this->belongsTo(User::class);
    }
}