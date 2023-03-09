<?php

namespace App\Models\Public;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use Uuid;
    protected $table = 'testimonial';
    protected $fillable = [
        'id',
        'name',
        'pekerjaan',
        'foto',
        'sts_aktif',
        'sts_hapus',
        'created_by',
        'updated_by'
    ];
}
