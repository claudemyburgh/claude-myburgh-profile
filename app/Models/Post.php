<?php

namespace App\Models;

use Designbycode\Sluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'title',
        'description',
        'slug',
        'content'
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    /**
     * @return string
     */
    public function slugFrom(): string
    {
        return 'title';
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
