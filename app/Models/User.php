<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'bio', 'github_id', 'photo'];


    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
