<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version August 14, 2020, 6:13 pm UTC
 *
 * @property string name
 * @property string email
 * @property string first_name
 * @property string last_name
 * @property string gender
 * @property string date_of_birth
 * @property boolean is_subscribed
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property integer view_count
 * @property integer role_id
 * @property string remember_token
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'first_name',
        'last_name',
        'gender',
        'cell',
        'photo_id',
        'certificate_photo',
        'accountName',
        'accountNumber',
        'date_of_birth' ,
        'date_of_birth',
        'is_subscribed',
        'email_verified_at',
        'password',
        'view_count',
        'role_id',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'cell' => 'string',
        'photo_id' => 'string',
        'certificate_photo' => 'string',
        'accountName' => 'string',
        'accountNumber' => 'string',
        'date_of_birth' => 'float',
        'is_subscribed' => 'boolean',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'view_count' => 'integer',
        'role_id' => 'integer',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'view_count' => '',
        'role_id' => ''
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
    public function course()
    {
        return $this->belongsToMany('App\Models\Course');
    }
}
