<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class currenci extends Model
{
    use HasFactory;
    public $fillable = ['valeur'];
}
