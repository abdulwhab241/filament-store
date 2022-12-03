<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electric extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'name', 
        'disc', 
        'price',
        'image'
    ];
   
    
    protected $casts = [
        'image' => 'array',
    ];
   


    

}
