<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\TenderRepository;
use App\Entities\Tender;

/**
 * Class TenderRepositoryEloquent
 * @package namespace App\Repositories;
 */
class TenderRepositoryEloquent extends BaseRepository implements TenderRepository
{

    protected $fieldSearchable = [
        'nama_tender' => 'like'
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Tender::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
