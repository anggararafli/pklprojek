<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kelas',
        'jurusan'
    ];
    protected $primaryKey = 'id_kelas';

    public function Kelas() {
        return $this->hasMany(kelas::class, 'id_kelas', 'id');
    }
}
