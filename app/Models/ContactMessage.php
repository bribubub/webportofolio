<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    
    protected $table = 'inbox'; 

   
    protected $fillable = [
        'name',
        'email',
        'message',
    ];

   

   
    public $timestamps = true; 
                                
}
