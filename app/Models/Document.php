<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'name',
        'no_document',
        'sender',
        'receiver',
        'category_id',
        'priority_id',
        'file',
        'description',
    ];
    use HasFactory;
}
