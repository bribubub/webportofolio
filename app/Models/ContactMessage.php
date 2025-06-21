<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural form of the model name
    protected $table = 'inbox'; // Your table is 'inbox', not 'contact_messages'

    // Define which attributes are mass assignable
    protected $fillable = [
        'name',
        'email',
        'message',
    ];

    // If your 'id' column is not auto-incrementing or not named 'id', you'd configure it here.
    // protected $primaryKey = 'your_id_column_name';
    // public $incrementing = false;

    // If you don't want Laravel to automatically manage 'created_at' and 'updated_at' columns
    public $timestamps = true; // Set to false if you don't have these columns.
                                // Based on your table, it's good practice to add them (see Step 7 for migration)
}
