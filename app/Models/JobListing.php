<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags'];

    public function scopeFilter($query, array $filtters)
    {
        if ($filtters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . $filtters['tag'] . '%');
        }
        if (auth()->check()) {
            $userEmail = auth()->user()->email;
    
            if ($filtters['email'] ?? false || empty($filtters)) {
                $query->where('email', $userEmail);
            }
            elseif ($filtters['email'] ?? false) {
                $query->where('email', $filtters['email']);
            }
        }
    }
}