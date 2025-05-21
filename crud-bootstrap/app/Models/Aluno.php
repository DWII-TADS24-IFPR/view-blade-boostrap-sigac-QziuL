<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    use SoftDeletes;
    private     string $nome;
    private     string $email;
    private     string $cpf;
    private     string $senha;
    private     int $turma_id;
    private     int $curso_id;

    protected $table = 'alunos';

    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'senha',
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

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome($value): void
    {
        $this->attributes['nome'] = $value;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail($value): void
    {
        $this->attributes['email'] = $value;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf($value): void
    {
        $this->attributes['cpf'] = $value;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setSenha($value): void
    {
        $this->attributes['senha'] = $value;
    }

    public function getTurmaId(): int
    {
        return $this->turma_id;
    }

    public function setTurmaId($value): void
    {
        $this->attributes['turma_id'] = $value;
    }

    public function getCursoId(): int
    {
        return $this->curso_id;
    }

    public function setCursoId($value): void
    {
        $this->attributes['curso_id'] = $value;
    }
}
