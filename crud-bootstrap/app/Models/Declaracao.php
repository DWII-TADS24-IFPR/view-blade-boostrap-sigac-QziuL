<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Declaracao extends Model
{
    use SoftDeletes;

    protected $table = 'declaracao';

    protected $fillable = ['hash', 'data', 'aluno_id', 'comprovantes_id'];

    private string $hash;
    private DateTime $data;
    private int $aluno_id;
    private int $comprovante_id;

    public function getHash(): string
    {
        return $this->hash;
    }

    public function setHash(string $hash): void
    {
        $this->hash = $hash;
    }

    public function getData(): DateTime
    {
        return $this->data;
    }

    public function setData(DateTime $data): void
    {
        $this->data = $data;
    }

    public function getAlunoId(): int
    {
        return $this->aluno_id;
    }

    public function setAlunoId(int $aluno_id): void
    {
        $this->aluno_id = $aluno_id;
    }

    public function getComprovanteId(): int
    {
        return $this->comprovante_id;
    }

    public function setComprovanteId(int $comprovante_id): void
    {
        $this->comprovante_id = $comprovante_id;
    }



    public function aluno(): BelongsTo{
        return $this->belongsTo(Aluno::class);
    }

    public function comprovante(): BelongsTo{
        return $this->belongsTo(Comprovante::class);
    }
}
