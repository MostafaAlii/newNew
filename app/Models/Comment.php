<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model {
    use HasFactory;
    protected $table = 'comments';
    protected $fillable =['user_id', 'body', 'status'];
    public function commentable(): MorphTo {
        return $this->morphTo();
    }
    public function service() {
        return $this->belongsTo(Service::class);
    }
    public function blog() {
        return $this->belongsTo(Blog::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function scopeActive($query) {
        return $query->whereStatus(true);
    }
}