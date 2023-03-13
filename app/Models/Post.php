<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function excerpt()
    {
        return substr($this->description, 0, 55);
    }

    public function short()
    {
        return substr($this->description, 0, 210);
    }
}
