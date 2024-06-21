<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'company', 'location', 'website', 'listedby', 'email', 'logo', 'description', 'tags'];

    public function scopeFilter($query, array $filtters)
    {
        if ($filtters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . $filtters['tag'] . '%');
        }

        if ($filtters['search'] ?? false) {
            $query->where('title', 'like', '%' . $filtters['search'] . '%')
                ->orWhere('company', 'like', '%' . $filtters['search'] . '%');
        }

        if (auth()->check()) {
            $userEmail = auth()->user()->email;

            if ($filtters['email'] ?? false || empty($filtters)) {
                $query->where('email', $userEmail);
            } elseif ($filtters['email'] ?? false) {
                $query->where('email', $filtters['email']);
            }
        }
    }
}
