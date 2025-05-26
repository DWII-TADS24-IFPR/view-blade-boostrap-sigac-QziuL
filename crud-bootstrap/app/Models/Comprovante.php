<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comprovante extends Model
{
    use SoftDeletes;

    private int $horas;
    private string $atividade;
    private int $categoria_id;
    private int $aluno_id;

    protected $table = 'comprovantes';

    protected $fillable = [
        'horas',
        'atividade',
        'categoria_id',
        'aluno_id'
    ];

    public function setHoras($value): void
    {
        $this->attributes['horas'] = $value;
    }

    public function setAtividade($value): void
    {
        $this->attributes['atividade'] = $value;
    }

    public function setCategoriaId($value): void
    {
        $this->attributes['categoria_id'] = $value;
    }

    public function setAlunoId($value): void
    {
        $this->attributes['aluno_id'] = $value;
    }

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
