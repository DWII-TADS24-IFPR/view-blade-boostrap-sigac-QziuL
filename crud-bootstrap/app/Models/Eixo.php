<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Eixo extends Model
{
    private string $nome;

    protected $table = 'eixos';
    protected $fillable = ['nome'];

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function cursos(): HasMany{
        return $this->hasMany(Curso::class);
    }
}
