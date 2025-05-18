<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use SoftDeletes;
    private string $nome;
    private string $sigla;
    private string $total_horas;
    private int $nivel_id;
    private int $eixo_id;

    protected $table = 'cursos';

    protected $fillable = [
        'nome',
        'sigla',
        'total_horas',
        'nivel_id',
        'eixo_id'
    ];

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getSigla(): string
    {
        return $this->sigla;
    }

    public function setSigla(string $sigla): void
    {
        $this->sigla = $sigla;
    }

    public function getTotalHoras(): string
    {
        return $this->total_horas;
    }

    public function setTotalHoras(string $total_horas): void
    {
        $this->total_horas = $total_horas;
    }

    public function getNivelId(): int
    {
        return $this->nivel_id;
    }

    public function setNivelId(int $nivel_id): void
    {
        $this->nivel_id = $nivel_id;
    }

    public function getEixoId(): int
    {
        return $this->eixo_id;
    }

    public function setEixoId(int $eixo_id): void
    {
        $this->eixo_id = $eixo_id;
    }

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
