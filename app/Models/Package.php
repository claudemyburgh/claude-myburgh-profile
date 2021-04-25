<?php

namespace App\Models;

use Designbycode\Sluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory, Sluggable;


    protected $fillable = [
        'name',
        'slug',
        'vendor_name',
        'description',
        'url',
        'install'
    ];

    /**
     * @return string
     */
    public function slugFrom(): string
    {
        return 'name';
    }




}
