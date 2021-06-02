<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    use HasFactory;
    protected $fillable = ['address', 'linkedin', 'twitter', 'profile_summary', 'user_id', 'skype', 'mobile'];
}
