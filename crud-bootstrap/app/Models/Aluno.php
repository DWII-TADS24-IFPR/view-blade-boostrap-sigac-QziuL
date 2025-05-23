<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Aluno extends Model
{
    private     string $nome;
    private     string $email;
    private     string $cpf;
    private     string $senha;
    private     int $user_id;
    private     int $turma_id;
    private     int $curso_id;

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
//    public function __construct(
//        string $nome,
//        string $email,
//        string $cpf,
//        string $senha,
//        int $user_id,
//        int $turma_id,
//        int $curso_id
//    ) {
//        $this->nome = $nome;
//        $this->email = $email;
//        $this->cpf = $cpf;
//        $this->senha = $senha;
//        $this->user_id = $user_id;
//        $this->turma_id = $turma_id;
//        $this->curso_id = $curso_id;
//    }


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

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function getTurmaId(): int
    {
        return $this->turma_id;
    }

    public function setTurmaId(int $turma_id): void
    {
        $this->turma_id = $turma_id;
    }

    public function getCursoId(): int
    {
        return $this->curso_id;
    }

    public function setCursoId(int $curso_id): void
    {
        $this->curso_id = $curso_id;
    }
}
