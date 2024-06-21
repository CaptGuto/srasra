<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ['name', 'email', 'cover_letter', 'job_id'];
    use HasFactory;
}
