<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repositories\TenderRepositoryEloquent;

class PengadaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param TenderRepositoryEloquent $repository
     * @return \Illuminate\Http\Response
     */
    public function index(TenderRepositoryEloquent $repository)
    {
        $tender = $repository->skipPresenter()->paginate();
        return view('pengadaan', compact('tender'));
    }

}
