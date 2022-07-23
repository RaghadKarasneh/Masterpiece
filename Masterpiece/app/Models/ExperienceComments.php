<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ExperienceComments extends Model
{
    use HasFactory;
    protected $fillable = ['user_id'];
    public function experiences_replies(){
    	return $this->hasMany(ExperiencesReplies::class);
    }
}
