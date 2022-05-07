<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChapterRequirements extends Model
{
    use HasFactory;
    protected $table = "chapter_requirements";
    protected $primaryKey = "id";
    //protected $fillable = ["name"];
    protected $guarded = [];
}
