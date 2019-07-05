<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\User;

class Blog extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'descriptions',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
