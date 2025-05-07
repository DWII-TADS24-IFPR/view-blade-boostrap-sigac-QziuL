<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Declaracao extends Model
{
    protected $table = 'declaracao';

    protected $fillable = ['hash', 'data', 'aluno_id', 'comprovantes_id'];

    public function aluno(): BelongsTo{
        return $this->belongsTo(Aluno::class);
    }

    public function comprovante(): BelongsTo{
        return $this->belongsTo(Comprovante::class);
    }
}
