<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'image_path',
        'title',
        'order',
    ];
}
