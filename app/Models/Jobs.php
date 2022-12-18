<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'year_experience',
        'open_positions',
        'description'
    ];

    /**
     * Get the user for the job.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
