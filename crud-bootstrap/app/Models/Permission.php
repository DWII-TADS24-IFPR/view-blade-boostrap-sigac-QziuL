<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use SoftDeletes;
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
