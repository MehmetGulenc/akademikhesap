<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fields extends Model
{
    use HasFactory;
    protected $table = "fields";
    protected $primaryKey = "id";
    //protected $fillable = ["name"];
    protected $guarded = [];


    public function getUser(){
        /*return $this->hasOne('App\Models\User', 'id', 'user_id');*/
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function getTool(){
        return $this->hasOne(Tools::class, 'id', 'tool_id');
    }
}
