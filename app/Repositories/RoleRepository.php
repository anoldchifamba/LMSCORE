<?php

namespace AT_academy\Repositories;

use AT_academy\Models\Role;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RoleRepository
 * @package AT_academy\Repositories
 * @version August 14, 2020, 6:12 pm UTC
 *
 * @method Role findWithoutFail($id, $columns = ['*'])
 * @method Role find($id, $columns = ['*'])
 * @method Role first($columns = ['*'])
*/
class RoleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Role::class;
    }
}
