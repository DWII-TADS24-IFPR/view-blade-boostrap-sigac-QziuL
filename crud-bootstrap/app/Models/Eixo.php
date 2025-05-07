<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Eixo extends Model
{
    /**
     * @var array|false|mixed|string|string[]|null
     */

    protected $table = 'eixos';
    protected $fillable = ['nome'];

    public function cursos(): HasMany{
        return $this->hasMany(Curso::class);
    }
}
