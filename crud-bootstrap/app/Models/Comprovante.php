<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comprovante extends Model
{
    use SoftDeletes;

    private int $horas;
    private string $atividade;
    private int $categoria_id;
    private int $aluno_id;
    private int $user_id;

    protected $table = 'comprovantes';

    protected $fillable = [
        'horas',
        'atividade',
        'categoria_id',
        'aluno_id',
        'user_id'
    ];

    public function getHoras(): int
    {
        return $this->horas;
    }

    public function setHoras(int $horas): void
    {
        $this->horas = $horas;
    }

    public function getAtividade(): string
    {
        return $this->atividade;
    }

    public function setAtividade(string $atividade): void
    {
        $this->atividade = $atividade;
    }

    public function getCategoriaId(): int
    {
        return $this->categoria_id;
    }

    public function setCategoriaId(int $categoria_id): void
    {
        $this->categoria_id = $categoria_id;
    }

    public function getAlunoId(): int
    {
        return $this->aluno_id;
    }

    public function setAlunoId(int $aluno_id): void
    {
        $this->aluno_id = $aluno_id;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function declaracoes(): HasMany{
        return $this->hasMany(Declaracao::class);
    }

    public function categoria(): BelongsTo{
        return $this->belongsTo(Categoria::class);
    }

    public function aluno(): BelongsTo{
        return $this->belongsTo(Aluno::class);
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
