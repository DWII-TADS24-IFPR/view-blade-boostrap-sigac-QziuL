<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resource extends Model
{
    use SoftDeletes;
    protected $table = 'resources';

    protected $fillable = ['nome'];

    public function permissoes(): HasMany{
        return $this->hasMany(Permission::class);
    }
}
