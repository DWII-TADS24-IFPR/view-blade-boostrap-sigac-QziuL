<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comprovante extends Model
{
    protected $table = 'comprovantes';

    protected $fillable = [
        'horas',
        'atividade',
        'categoria_id',
        'aluno_id',
        'user_id'
    ];

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
