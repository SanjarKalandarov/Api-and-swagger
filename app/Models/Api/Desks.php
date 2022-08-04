<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desks extends Model
{
    use HasFactory;
    protected $fillable=['name'];
//    protected $table='desks';
    public  function  lists(){
        return $this->hasMany(DeskList::class);
    }
    //
}
