<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Curso extends Model
{
    protected $table = 'cursos';

    protected $fillable = [
        'nome',
        'sigla',
        'total_horas',
        'nivel_id',
        'eixo_id'
    ];

    public function turmas(): HasMany{
        return $this->HasMany(Turma::class);
    }

    public function alunos(): HasMany{
        return $this->HasMany(Aluno::class);
    }

    public function categorias(): HasMany{
        return $this->HasMany(Categoria::class);
    }

    public function users(): HasMany{
        return $this->HasMany(User::class);
    }

    public function nivel(): BelongsTo{
        return $this->belongsTo(Nivel::class);
    }

    public function eixo(): BelongsTo{
        return $this->belongsTo(Eixo::class);
    }
}
