<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_album',
        'deskripsi',
        'tglbuat',
        'ttl_foto',
        'userid',
    ];

    protected $primaryKey = 'albumid';

    public function user()
    {
        return $this->belongsTo(User::class, 'userid', 'userid');
    }
}