<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $fillable = [
        'role_id',
        'resource_id',
        'permission'
    ];

    public function role(): BelongsTo{
      return $this->belongsTo(Role::class);
    }

    public function resource(): BelongsTo{
        return $this->belongsTo(Resource::class);
    }
}
