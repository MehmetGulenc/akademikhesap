<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tools extends Model
{
    use HasFactory;
    protected $table = "tools";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function scopeStatusActive($query){
        return $query->where('status', 1);
    }

 /*   public function getFields(){
//        return $this->hasOne(Tools::class, 'id', 'tool_id');
        return $this->hasOne(Fields::class, 'tool_id', 'id');
    }*/
}
