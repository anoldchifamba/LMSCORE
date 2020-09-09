<?php

namespace AT_academy\Repositories;

use AT_academy\Models\Comment;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CommentRepository
 * @package AT_academy\Repositories
 * @version August 14, 2020, 1:15 pm UTC
 *
 * @method Comment findWithoutFail($id, $columns = ['*'])
 * @method Comment find($id, $columns = ['*'])
 * @method Comment first($columns = ['*'])
*/
class CommentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'course_id',
        'category_id',
        'body'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Comment::class;
    }
}
