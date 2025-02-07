<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'gambar',
        'deskripsi_foto',
        'tglunggah',
        'jumlah_foto',
        'albumid',
        'userid',
    ];

    protected $primaryKey = 'fotoid';

    /**
     * Relasi dengan Album
     */
    public function album()
    {
        return $this->belongsTo(Album::class, 'albumid', 'albumid');
    }

    /**
     * Relasi dengan User
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'userid', 'userid');
    }

    /**
     * Relasi dengan KomentarFoto
     */
    public function komentar()
    {
        return $this->hasMany(KomentarFoto::class, 'FotoID', 'fotoid');
    }
}
