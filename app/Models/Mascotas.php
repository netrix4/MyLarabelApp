<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{
    use HasFactory;

    protected $fillable = [
        'IdU',
        'nombreM',
        'especie',
        'raza',
        'edad',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'IdU');
    }

    public function citas()
    {
        return $this->hasMany(Citas::class, 'idM');
    }
}