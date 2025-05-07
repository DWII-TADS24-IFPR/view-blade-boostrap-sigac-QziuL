<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = ['nome', 'curso_id', 'maximo_horas'];

    public function comprovantes(): HasMany{
        return $this->hasMany(Comprovante::class);
    }

    public function documentos(): HasMany{
        return $this->hasMany(Documento::class);
    }

    public function curso(): BelongsTo{
        return $this->belongsTo(Curso::class);
    }
}
