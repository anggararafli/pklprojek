<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;
    protected $fillable = [
        'nip',
        'nama_guru',
        'jenis_kelamin',
        'nama_guru',
        'Tanggal_Lahir',
        'Tempat_Lahir',
        'Alamat',
        'Agama',
        'Email',
        'username_guru',
        'password_guru',
    ];

    protected $primaryKey = 'id_guru';
    public function guru(): HasMany
    {
        return $this->hasMany(guru::class, 'id_guru', 'id_guru');
    }
}
