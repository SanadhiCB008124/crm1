<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteRegistration extends Model
{
    use HasFactory;

    protected $table = 'site_registrations';

    protected $fillable = [
        'user_id',
        'register_date',
    ];
}
