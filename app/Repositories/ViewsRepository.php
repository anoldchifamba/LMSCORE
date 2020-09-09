<?php

namespace AT_academy\Repositories;

use AT_academy\Models\Views;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ViewsRepository
 * @package AT_academy\Repositories
 * @version August 14, 2020, 1:21 pm UTC
 *
 * @method Views findWithoutFail($id, $columns = ['*'])
 * @method Views find($id, $columns = ['*'])
 * @method Views first($columns = ['*'])
*/
class ViewsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'user_account_id',
        'category_id',
        'course_id',
        'iterm_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Views::class;
    }
}
