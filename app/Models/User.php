<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nama_user', 'email', 'password', 'no_whatsapp', 'alamat', 'role'
    ];

    protected $hidden = ['password', 'remember_token'];

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }
}