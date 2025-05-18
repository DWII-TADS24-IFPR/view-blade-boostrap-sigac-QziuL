<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Documento extends Model
{
    use SoftDeletes;

    protected $table = 'documentos';

    protected $fillable = [
        'url',
        'descricao',
        'horas_in',
        'horas_out',
        'status',
        'comentario',
        'categoria_id',
        'user_id',
    ];

    private string $url;
    private string $descricao;
    private float $horas_in;
    private float $horas_out;
    private string $status;
    private string $comentario;
    private int $categoria_id;
    private int $user_id;

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getHorasIn(): float
    {
        return $this->horas_in;
    }

    public function setHorasIn(float $horas_in): void
    {
        $this->horas_in = $horas_in;
    }

    public function getHorasOut(): float
    {
        return $this->horas_out;
    }

    public function setHorasOut(float $horas_out): void
    {
        $this->horas_out = $horas_out;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getComentario(): string
    {
        return $this->comentario;
    }

    public function setComentario(string $comentario): void
    {
        $this->comentario = $comentario;
    }

    public function getCategoriaId(): int
    {
        return $this->categoria_id;
    }

    public function setCategoriaId(int $categoria_id): void
    {
        $this->categoria_id = $categoria_id;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function categoria(): BelongsTo{
        return $this->belongsTo(Categoria::class);
    }
}
