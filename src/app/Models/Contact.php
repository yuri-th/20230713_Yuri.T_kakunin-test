<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'gender',
        'email',
        'zip',
        'postal_code',
        'building',
        'content'
    ];

    //管理システム検索
    public function getLists()
    {
        $categories = Contact::pluck('name', 'id');

        return $categories;
    }
}