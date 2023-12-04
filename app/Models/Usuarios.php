<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Usuarios extends Model
{
    use HasFactory;

    protected $fillable = [
       'IdU', 'nombreU', 'apapU', 'apamU', 'telU', 'nombreM', 'direccion', 'TipoDeUsuario',
    ];

    public function mascotas()
    {
        return $this->hasMany(Mascota::class, 'IdU');
    }
}
