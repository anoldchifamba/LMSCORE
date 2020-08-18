<?php

namespace App\Repositories;

use App\Models\Catergory;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CatergoryRepository
 * @package App\Repositories
 * @version August 17, 2020, 12:30 pm UTC
 *
 * @method Catergory findWithoutFail($id, $columns = ['*'])
 * @method Catergory find($id, $columns = ['*'])
 * @method Catergory first($columns = ['*'])
*/
class CatergoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'view_count'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Catergory::class;
    }
}
