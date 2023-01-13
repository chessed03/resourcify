<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    use HasFactory;

    protected $table    = 'projects';

    protected $casts    = [
        'developers'  => 'json',
        'languages'   => 'json',
        'frameworks'  => 'json'
    ];

    protected $fillable = [
        'name',
        'description',
        'developers',
        'frameworks',
        'languages',
        'image_logo',
        'status',
        'created_by'
    ];

    public static function selectItemsDevelopers()
    {
        return Developer::select([DB::raw('CONCAT(names," ",surnames) AS name')])
            ->where('status', 1)
            ->get()
            ->pluck('name', 'id');
    }

    public static function selectItemsLanguages()
    {
        return Language::where('status', 1)->get()->pluck('name', 'id');
    }

    public static function selectItemsFrameworks()
    {
        return Framework::where('status', 1)->get()->pluck('name', 'id');
    }

}
