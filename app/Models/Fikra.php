<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Fikra extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    
    public $translatedAttributes = ['title', 'content'];
    public $guarded = ['id'];


    public function madde()
    {
        return $this->belongsTo(Madde::class);
    }
}
