<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CourseUser
 * @package App\Models
 * @version August 14, 2020, 1:17 pm UTC
 *
 * @property integer user_id
 * @property integer course_id
 * @property integer user_account_id
 * @property string|\Carbon\Carbon pay_date
 * @property string|\Carbon\Carbon expiry_date
 * @property string plan
 * @property number pay_amount
 * @property boolean status
 */
class CourseUser extends Model
{
    use SoftDeletes;

    public $table = 'course_user';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'course_id',
        'user_account_id',
        'pay_date',
        'expiry_date',
        'token',
        'pay_amount',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'course_id' => 'integer',
        'user_account_id' => 'integer',
        'pay_date' => 'datetime',
        'expiry_date' => 'datetime',
        'plan' => 'string',
        'pay_amount' => 'float',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'course_id' => 'required',
        'user_account_id' => '',
        'pay_date' => 'required',
        'expiry_date' => 'required',
        'token' => 'required',
        'pay_amount' => 'required',
        'status' => 'required'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Catergory');
    }


}
