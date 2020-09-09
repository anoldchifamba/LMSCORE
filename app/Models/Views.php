<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Views
 * @package App\Models
 * @version August 14, 2020, 1:21 pm UTC
 *
 * @property integer user_id
 * @property integer user_account_id
 * @property integer category_id
 * @property integer course_id
 * @property integer iterm_id
 */
class Views extends Model
{
    use SoftDeletes;

    public $table = 'views';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'user_account_id',
        'category_id',
        'course_id',
        'iterm_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'user_account_id' => 'integer',
        'category_id' => 'integer',
        'course_id' => 'integer',
        'iterm_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category_id' => 'required',
        'course_id' => 'required'
    ];


}
