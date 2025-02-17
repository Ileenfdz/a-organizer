<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'title',
    ];

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }
}
