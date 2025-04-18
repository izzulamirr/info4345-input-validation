<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{

    use SoftDeletes;

    protected $fillable = ['title', 'descrtiption', 'user_id', 'status'];
}
 