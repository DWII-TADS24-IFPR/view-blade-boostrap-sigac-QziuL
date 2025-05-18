<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;
    protected $table = 'roles';

    protected $fillable = ['nome'];

    public function permissoes(): HasMany{
        return $this->hasMany(Permission::class);
    }

    public function users(): HasMany{
        return $this->hasMany(User::class);
    }
}
