<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Rentier extends Model
{
    use HasTranslations;

    public $translatable = ['name', 'text', 'modaleditortext', 'modallink', 'modallinkbutton', 'file_alt'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name',
        'text',
        'file',
        'bgcolor',
        'sort'
    ];
}