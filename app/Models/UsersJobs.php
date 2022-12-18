<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersJobs extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [];

    /**
     * Get the users for the jobs.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }

    /**
     * Get the jobs for the users.
     */
    public function jobs()
    {
        return $this->belongsToMany(Jobs::class, 'job_id');
    }
}
