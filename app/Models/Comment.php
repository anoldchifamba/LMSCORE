<?php

namespace AT_academy\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comment
 * @package AT_academy\Models
 * @version August 14, 2020, 1:15 pm UTC
 *
 * @property integer user_id
 * @property integer course_id
 * @property integer category_id
 * @property string body
 */
class Comment extends Model
{
    use SoftDeletes;

    public $table = 'comments';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'course_id',
        'category_id',
        'body'
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
        'category_id' => 'integer',
        'body' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => '',
        'body' => 'required'
    ];

    public function category()
    {
        return $this->belongsTo('AT_academy\Models\Category');
    }
    public function course()
    {
        return $this->belongsTo('AT_academy\Models\Course');
    }
    public function user()
    {
        return $this->belongsTo('AT_academy\Models\User');
    }
}
