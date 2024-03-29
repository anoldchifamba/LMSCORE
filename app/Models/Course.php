<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Course
 * @package App\Models
 * @version August 17, 2020, 11:31 am UTC
 *
 * @property integer user_id
 * @property integer category_id
 * @property string title
 * @property string sub_title
 * @property string description
 * @property string about_instructor
 * @property string playlist_url
 * @property string tags
 * @property string photo
 * @property string promo_video_url
 * @property integer creator_status
 * @property integer admin_status
 * @property string what_will_students_learn
 * @property string target_students
 * @property string requirements
 * @property number discount_price
 * @property number actual_price
 * @property integer view_count
 * @property integer subscriber_count
 */
class Course extends Model
{
    use SoftDeletes;

    public $table = 'courses';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'category_id',
        'title',
        'sub_title',
        'description',
        'about_instructor',
        'playlist_url',
        'tags',
        'photo',
        'promo_video_url',
        'creator_status',
        'admin_status',
        'what_will_students_learn',
        'target_students',
        'requirements',
        'discount_price',
        'actual_price',
        'paynow_url',
        'view_count',
        'subscriber_count'
//        'course_calendar',
//        'course_outline'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'category_id' => 'integer',
        'title' => 'string',
        'sub_title' => 'string',
        'description' => 'string',
        'about_instructor' => 'string',
        'playlist_url' => 'string',
        'tags' => 'string',
        'photo' => 'string',
        'promo_video_url' => 'string',
        'creator_status' => 'integer',
        'admin_status' => 'integer',
        'what_will_students_learn' => 'string',
        'target_students' => 'string',
        'requirements' => 'string',
        'discount_price' => 'float',
        'actual_price' => 'float',
        'paynow_url' => 'string',
        'view_count' => 'integer',
        'subscriber_count' => 'integer'
//        'course_calendar'=>'string',
//        'course_outline'=>'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => '',
        'category_id' => '',
        'title' => 'required',
        'description' => 'required',
        'about_instructor' => 'required',
        'playlist_url' => 'required',
        'creator_status' => 'required',
        'admin_status' => '',
        'discount_price' => 'required',
        'actual_price' => 'required',
        'paynow_url' => 'required',
        'view_count' => '',
        'subscriber_count' => ''

    ];

    /**
     * @param int $user_id
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function users()
{
    return $this->belongsToMany('App\Models\User')
        ->withPivot('pay_amount','pay_date','expiry_date','token','created_at','user_account_id');
//        ->with('category_id');
}
}
