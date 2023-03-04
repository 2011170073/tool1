<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\goal;

class ifthen extends Model
{
    use HasFactory;
    
    public function goal(){
        return $this->belongsTo(goal::class);
        //ifthen(多)クラスのbelongsto関数でgoal(1)を参照
    }
    
    protected $fillable = [
        "id",
        "then1",
        "then2",
        "then3",
        "goal_id"
        ];
    
//goals:ifthens = 1:多
}
