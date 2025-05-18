<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turma extends Model
{
    use SoftDeletes;

    protected $table = 'turmas';

    protected $fillable = ['curso_id', 'ano'];

    private int $ano;
    private int $curso_id;

    public function getAno(): int
    {
        return $this->ano;
    }

    public function setAno(int $ano): void
    {
        $this->ano = $ano;
    }

    public function getCursoId(): int
    {
        return $this->curso_id;
    }

    public function setCursoId(int $curso_id): void
    {
        $this->curso_id = $curso_id;
    }

    public function curso(): BelongsTo{
        return $this->belongsTo(Curso::class);
    }

    public function alunos(): HasMany{
        return $this->hasMany(Aluno::class);
    }
}
