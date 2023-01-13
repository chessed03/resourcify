<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $table    = 'languages';

    protected $fillable = [
        'name',
        'description',
        'type_id',
        'category_id',
        'image_logo',
        'status',
        'created_by'
    ];

    public function type()
    {
        return $this->belongsTo('App\Models\Type', 'type_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

}
