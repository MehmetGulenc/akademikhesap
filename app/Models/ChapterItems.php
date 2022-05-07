<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChapterItems extends Model
{
    use HasFactory;
    protected $table = "chapter_items";
    protected $primaryKey = "id";
    //protected $fillable = ["name"];
    protected $guarded = [];
}
