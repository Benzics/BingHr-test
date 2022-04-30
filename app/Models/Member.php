<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public $incrementing = FALSE;

    protected $fillable = ['id', 'first_name', 'last_name', 'user_name', 'password', 'role', 'phone', 'email'];
}
