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
        'categoria_id'
    ];

    private string $url;
    private string $descricao;
    private float $horas_in;
    private float $horas_out;
    private string $status;
    private string $comentario;
    private int $categoria_id;

    public function setUrl($value): void
    {
        $this->attributes['url'] = $value;
    }

    public function setDescricao($value): void
    {
        $this->attributes['descricao'] = $value;
    }

    public function setHorasIn($value): void
    {
        $this->attributes['horas_in'] = $value;
    }

    public function setHorasOut($value): void
    {
        $this->attributes['horas_out'] = $value;
    }

    public function setStatus($value): void
    {
        $this->attributes['status'] = $value;
    }

    public function setComentario($value): void
    {
        $this->attributes['comentario'] = $value;
    }

    public function setCategoriaId($value): void
    {
        $this->attributes['categoria_id'] = $value;
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function categoria(): BelongsTo{
        return $this->belongsTo(Categoria::class);
    }
}
