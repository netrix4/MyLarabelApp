<?php
namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'especie', 'raza', 'edad', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
