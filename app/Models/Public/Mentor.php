<?php

namespace App\Models\Public;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use Uuid;
    protected $table = 'mentor';
    protected $fillable = [
        'id',
        'name',
        'email',
        'foto',
        'id_user',
        'sts_aktif',
        'sts_hapus',
        'created_by',
        'updated_by'
    ];

    public function webinar()
    {
        return $this->belongsTo('App\Models\Public\Webinar', 'id', 'id_mentor');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id', 'id_user');
    }
}
