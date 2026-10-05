<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
        protected $fillable = [
        'name',
        'slug',
        'subdomain',
        'domain',
        'type', 
        'logo_path',
        'primary_color',
        'status',
    ];
}
