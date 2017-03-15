<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class m_dokter extends Model
{
    protected $table ='dokter';
    protected $primaryKey ='id_dokter';

    public $timestamps = false;

    public function keuser(){
        return $this->belongsTo(m_user::class,'id_user');
    }

    public function kepemeriksaan(){
        return $this->hasMany(m_pemeriksaan::class,'id_dokter');
    }
}
