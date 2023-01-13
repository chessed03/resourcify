<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;

    protected $table    = 'developers';

    protected $casts    = [
        'languages'  => 'json',
        'frameworks' => 'json'
    ];

    protected $fillable = [
        'names',
        'surnames',
        'profession',
        'description',
        'languages',
        'frameworks',
        'status',
        'created_by'
    ];

    public static function selectItemsLanguages()
    {
        return Language::where('status', 1)->get()->pluck('name', 'id');
    }

    public static function selectItemsFrameworks()
    {
        return Framework::where('status', 1)->get()->pluck('name', 'id');
    }

}
