<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filtters)
    {
        if ($filtters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . $filtters['tag'] . '%');
        }
    }
}