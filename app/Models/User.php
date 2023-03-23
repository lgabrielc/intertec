<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\Features\AccountDeletion;
use Laravel\Jetstream\Features\UsesAccountTTL;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'dni', //no se puede cambiar
        'nombre', //no se puede cambiar
        'apellido', //no se puede cambiar
        'direccion',
        'last_login', //no se puede cambiar
        'telefono',
        'estado',
        'email',
        'password',
    ];
    protected $dates = [
        'last_login',
        // otros campos de fecha
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function adminlte_desc()
    {
        return Auth()->user()->getRoleNames()->first();
    }
    public function adminlte_image()
    {
        return asset('storage/' . auth()->user()->profile_photo_path);
    }
    public function adminlte_profile_url()
    {
        return 'admin/perfil';
    }
}
