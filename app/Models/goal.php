<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ifthen;

class goal extends Model
{
    use HasFactory;
    
    public function ifthens(){
        return $this->hasMany(ifthen::class);
    }
    
    protected $fillable= [
            "id",
            "name",
            "condition",
            "start_season",
            "end_season",
            "big_goal_id",
        ];
}
