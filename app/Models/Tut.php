<?php

namespace App\Models;

use Designbycode\Sluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Tut extends Model implements HasMedia
{
    use HasFactory, Sluggable, InteractsWithMedia;

    protected $fillable = [
        'title',
        'description'
    ];


    public function slugFrom(): string
    {
        return 'title';
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function registerAllMediaConversions(): void
    {
        $this->addMediaCollection('tuts')
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('card')
                    ->width(800)
                    ->height(800);
            });
    }


}
