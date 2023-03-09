<?php

namespace App\Models\Public;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Webinar extends Model
{
    use Uuid;
    protected $table = 'webinar';
    protected $fillable = [
        'id',
        'name',
        'id_tipe_webinar',
        'level',
        'id_mentor',
        'quota',
        'pendaftar',
        'tgl_akhir',
        'sts_aktif',
        'sts_hapus',
        'created_by',
        'updated_by'
    ];

    public function tipe_webinar()
    {
        return $this->hasOne('App\Models\Public\TipeWebinar', 'id', 'id_tipe_webinar');
    }

    public function mentor()
    {
        return $this->hasOne('App\Models\Public\Mentor', 'id', 'id_mentor');
    }
}
