<?php

namespace AT_academy\Repositories;

use AT_academy\Models\User;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserRepository
 * @package AT_academy\Repositories
 * @version August 14, 2020, 6:13 pm UTC
 *
 * @method User findWithoutFail($id, $columns = ['*'])
 * @method User find($id, $columns = ['*'])
 * @method User first($columns = ['*'])
*/
class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'is_subscribed',
        'email_verified_at',
        'password',
        'view_count',
        'role_id',
        'remember_token'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }
}
