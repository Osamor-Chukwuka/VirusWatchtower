<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Virus extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'danger_level', 'affected_platform','symptoms', 'distribution_method', 'prevention','removal'];
    protected $table = 'virus';
}
