<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Presentable;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\PresentableTrait;
use Prettus\Repository\Traits\TransformableTrait;

class Tender extends Model implements Transformable, Presentable
{
    use TransformableTrait, PresentableTrait;

    protected $fillable = [];

    protected $table = 'tender';

    protected $dates = ['tgl_mulai', 'tgl_selesai'];
}
