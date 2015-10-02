<?php

namespace App\Presenters;

use App\Transformers\TenderTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class TenderPresenter
 *
 * @package namespace App\Presenters;
 */
class TenderPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TenderTransformer();
    }
}
