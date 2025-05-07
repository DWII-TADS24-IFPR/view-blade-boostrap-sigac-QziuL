<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Nivel extends Model
{
    protected $table = 'niveis';

    protected $fillable = ['nome'];

    public function cursos(): HasMany{
        return $this->hasMany(Curso::class);
    }
}
