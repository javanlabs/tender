<?php

namespace App\Repositories;

use App\Presenters\TenderPresenter;
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
        'nama_tender'    => 'like',
        'kode_paket'     => 'like',
        'unit'           => 'like',
        'satker'         => 'like',
        'pagu'           => 'like',
        'tahap_saat_ini' => 'like',
        'tgl_mulai'      => 'like',
        'tgl_selesai'    => 'like',
        'metode'         => 'like',

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

    public function presenter()
    {
        return TenderPresenter::class;
    }
}
