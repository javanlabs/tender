<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Tender;

/**
 * Class TenderTransformer
 * @package namespace App\Transformers;
 */
class TenderTransformer extends TransformerAbstract
{

    /**
     * Transform the \Tender entity
     * @param \Tender $model
     *
     * @return array
     */
    public function transform(Tender $model)
    {
        return [
            'nama_tender'    => $model->nama_tender,
            'kode_paket'     => $model->kode_paket,
            'unit'           => $model->unit,
            'satker'         => $model->satker,
            'pagu'           => $model->pagu,
            'tahap_saat_ini' => $model->tahap_saat_ini,
            'metode'         => $model->metode,
            'sumber'         => $model->sumber,
            'tgl_mulai'      => ($model->tgl_mulai) ? $model->tgl_mulai->formatLocalized('%d %b %Y') : '',
            'tgl_selesai'    => ($model->tgl_selesai) ? $model->tgl_selesai->formatLocalized('%d %b %Y') : ''
        ];
    }
}
