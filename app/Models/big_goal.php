<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\goal;

class big_goal extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "id",
        "name",
        "condition",
        "start_season",
        "end_season",
        
    ];
    
    public function goals(){//1(big_goals)→多(goals)を取得
        return $this->hasMany(goal::class);
    }
    
}
