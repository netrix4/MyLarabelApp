<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;

    protected $fillable = [
        'hora',
        'fecha',
        'idM',
        'idU',
    ];

    public function mascota()
    {
        return $this->belongsTo(Mascotas::class, 'idM');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'idU');
    }
}