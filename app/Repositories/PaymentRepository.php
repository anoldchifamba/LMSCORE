<?php

namespace AT_academy\Repositories;

use AT_academy\Models\Payment;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PaymentRepository
 * @package AT_academy\Repositories
 * @version August 14, 2020, 1:19 pm UTC
 *
 * @method Payment findWithoutFail($id, $columns = ['*'])
 * @method Payment find($id, $columns = ['*'])
 * @method Payment first($columns = ['*'])
*/
class PaymentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'course_id',
        'category_id',
        'amount',
        'status',
        'mode_of_payment',
        'payment_processor'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Payment::class;
    }
}
