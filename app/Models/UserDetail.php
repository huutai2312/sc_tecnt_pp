<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'username',
        'role',
        'avatar',
        'gender',
        'birth_date',
        'country',
        'website',
        'facebook',
        'youtube',
        'twitter',
        'linkedin',
        'last_login',
        '2fa',
        'account_status',
    ];

    protected $table = 'user_details';
}
