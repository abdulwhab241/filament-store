<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electronic extends Model
{
    use HasFactory;

    protected $fillable =[
        'name', 
        'disc', 
        'price'
        ];

        public function images()
        {
            return $this->hasMany(Image::class);
        }
}
