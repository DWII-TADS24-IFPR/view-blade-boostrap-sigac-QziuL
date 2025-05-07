<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Resource extends Model
{
    protected $table = 'resources';

    protected $fillable = ['nome'];

    public function permissoes(): HasMany{
        return $this->hasMany(Permission::class);
    }
}
