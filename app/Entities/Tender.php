<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Tender extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];

    protected $table = 'tender';

    protected $dates = ['tgl_mulai', 'tgl_selesai'];
}
