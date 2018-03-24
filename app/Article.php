<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'body',
        'viewCount',
        'commentCount'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
