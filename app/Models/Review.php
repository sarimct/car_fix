<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Review",
 *      required={"quotation_id", "rating", "comment"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="quotation_id",
 *          description="quotation_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="user_id",
 *          description="user_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="rating",
 *          description="rating",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="comment",
 *          description="comment",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="status",
 *          description="status",
 *          type="boolean"
 *      )
 * )
 */
class Review extends Model
{
    use SoftDeletes;

    public $table = 'reviews';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'quotation_id',
        'rating',
        'comment',
        'user_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'comment' => 'string',
        'status' => 'boolean'
    ];

    /**
     * The objects that should be append to toArray.
     *
     * @var array
     */
     protected $with = [
         'driver'
     ];

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
    protected $visible = [

    ];

    /**
     * Validation create rules
     *
     * @var array
     */
    public static $rules = [
        'quotation_id' => 'required',
        'rating' => 'required',
        'comment' => 'required'
    ];

    /**
     * Validation update rules
     *
     * @var array
     */
    public static $update_rules = [
        'quotation_id' => 'required',
        'rating' => 'required',
        'comment' => 'required'
    ];

    /**
     * Validation api rules
     *
     * @var array
     */
    public static $api_rules = [
        'quotation_id' => 'required',
        'rating' => 'required',
        'comment' => 'required'
    ];

    public function quotation()
    {
        return $this->belongsTo(Quotation::class);
    }

    public function driver()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
