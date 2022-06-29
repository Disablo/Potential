<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function setTitleAttribute($value) {
        $this->attributes['title'] = $value;
    }
    public function setBodyAttribute($value) {
        $this->attributes['body'] = $value;
    }
    public function setTagsAttribute($value) {
        $this->attributes['tags'] = '#'.$value;
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
