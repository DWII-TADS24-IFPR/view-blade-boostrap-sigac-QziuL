<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;
    private string $nome;
    private int $curso_id;
    private int $maximo_horas;

    protected $table = 'categorias';

    protected $fillable = ['nome', 'curso_id', 'maximo_horas'];

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getCursoId(): int
    {
        return $this->curso_id;
    }

    public function setCursoId(int $curso_id): void
    {
        $this->curso_id = $curso_id;
    }

    public function getMaximoHoras(): int
    {
        return $this->maximo_horas;
    }

    public function setMaximoHoras(int $maximo_horas): void
    {
        $this->maximo_horas = $maximo_horas;
    }



    public function comprovantes(): HasMany{
        return $this->hasMany(Comprovante::class);
    }

    public function documentos(): HasMany{
        return $this->hasMany(Documento::class);
    }

    public function curso(): BelongsTo{
        return $this->belongsTo(Curso::class);
    }
}
