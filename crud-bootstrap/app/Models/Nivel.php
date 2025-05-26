<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nivel extends Model
{
    use SoftDeletes;

    protected $table = 'niveis';
    protected $fillable = ['nome'];
    private string $nome;

    public function setNome($value): void
    {
        $this->attributes['nome'] = $value;
    }

    public function cursos(): HasMany{
        return $this->hasMany(Curso::class);
    }
}
