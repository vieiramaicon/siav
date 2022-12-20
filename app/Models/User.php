<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function perfis()
    {
        return $this->belongsToMany(Perfil::class, 'perfil_user');
    }

    public function isAdmin()
    {   
        return DB::table('users')
                    ->join('perfil_user', 'users.id', '=' , 'perfil_user.user_id')
                    ->join('perfis', 'perfil_user.perfil_id', '=', 'perfis.id')
                    ->where('users.id', '=', Auth::id())
                    ->where('perfis.nome', '=', 'admin')
                    ->exists();
    }

    public function isServidor()
    {
        return DB::table('users')
                    ->join('perfil_user', 'users.id', '=' , 'perfil_user.user_id')
                    ->join('perfis', 'perfil_user.perfil_id', '=', 'perfis.id')
                    ->where('users.id', '=', Auth::id())
                    ->where('perfis.nome', '=', 'servidor')
                    ->exists();

    }

    public function isProtocolo() 
    {
        return DB::table('users')
                    ->join('perfil_user', 'users.id', '=' , 'perfil_user.user_id')
                    ->join('perfis', 'perfis.id', '=', 'perfil_user.perfil_id')
                    ->where('users.id', '=', Auth::id())
                    ->where('perfis.nome', '=', 'protocolo')
                    ->exists();
    }

    public function isCopad()
    {
        return DB::table('users')
                    ->join('perfil_user', 'users.id', '=' , 'perfil_user.user_id')
                    ->join('perfis', 'perfil_user.perfil_id', '=', 'perfis.id')
                    ->where('users.id', '=', Auth::id())
                    ->where('perfis.nome', '=', 'copad')
                    ->exists();
    }

    public function hasPerfil($nome) {
        return DB::table('users')
                    ->join('perfil_user', 'users.id', '=' , 'perfil_user.user_id')
                    ->join('perfis', 'perfis.id', '=', 'perfil_user.perfil_id')
                    ->where('users.id', '=', Auth::id())
                    ->where('perfis.nome', '=', $nome)
                    ->exists();

    }
}
