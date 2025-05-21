<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

//    public function alunos(): HasMany{
//        return $this->hasMany(Aluno::class);
//    }
//
//    public function comprovantes(): HasMany{
//        return $this->hasMany(Comprovante::class);
//    }
//
//    public function documentos(): HasMany{
//        return $this->hasMany(Documento::class);
//    }
//
//    public function role(): BelongsTo{
//        return $this->belongsTo(Role::class);
//    }
//
//    public function curso(): BelongsTo{
//        return $this->belongsTo(Curso::class);
//    }
}
