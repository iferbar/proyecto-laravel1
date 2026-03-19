<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

  	protected $fillable = ['name', 'description', 'priority', 'status'];

          public static function getFields(){
            return __("tasks.fields");
        }
}
