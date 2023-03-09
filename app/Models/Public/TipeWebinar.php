<?php

namespace App\Models\Public;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class TipeWebinar extends Model
{
    use Uuid;
    protected $table = 'tipe_webinar';
    protected $fillable = [
        'id',
        'name',
        'sts_aktif',
        'sts_hapus',
        'created_by',
        'updated_by'
    ];

    public function webinar()
    {
        return $this->belongsTo('App\Models\Public\Webinar', 'id', 'id_mentor');
    }
}
