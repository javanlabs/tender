<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PengadaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tender = app()->make('App\Repositories\TenderRepositoryEloquent')->paginate();
        return view('pengadaan', compact('tender'));
    }

}
