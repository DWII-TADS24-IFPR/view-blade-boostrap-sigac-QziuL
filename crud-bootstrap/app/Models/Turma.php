<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Turma extends Model
{
    protected $table = 'turmas';

    protected $fillable = ['curso_id', 'ano'];

    public function curso(): BelongsTo{
        return $this->belongsTo(Curso::class);
    }

    public function alunos(): HasMany{
        return $this->hasMany(Aluno::class);
    }
}
