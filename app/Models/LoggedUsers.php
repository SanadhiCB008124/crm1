<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoggedUsers extends Model
{
    use HasFactory;

    protected $fillable = ['user_id',
        'login_timestamp',
        'logout_timestamp',
        'session_duration'];
}
