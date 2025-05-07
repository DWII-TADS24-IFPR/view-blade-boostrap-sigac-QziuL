<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Documento extends Model
{
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

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function categoria(): BelongsTo{
        return $this->belongsTo(Categoria::class);
    }
}
