<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    protected $table = 'contact_forms';

    protected $fillable = [
        'names',
        'surnames',
        'contact_number',
        'email_address',
        'company',
        'message',
        'status',
        'created_by'
    ];

}
