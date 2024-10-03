<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Tasks extends Model
{
   protected $fillable = [
    "name",
    "description",
    "id_project",
    "id_user",
    "priority",
    "date_start",
    "date_end",
    "status",
    "balanse",
   ] ;
}
