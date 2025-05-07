<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Aluno extends Model
{
    protected $table = 'alunos';

    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'senha',
        'user_id',
        'turma_id',
        'curso_id',
    ];

    public function comprovantes(): HasMany{
        return $this->hasMany(Comprovante::class);
    }

    public function turma(): BelongsTo{
        return $this->belongsTo(Turma::class);
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function curso(): BelongsTo{
        return $this->belongsTo(Curso::class);
    }
}
