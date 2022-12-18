<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCv extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'file_path',
    ];

    /**
     * Get the user for the CV.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the letter of recommendation for the CV.
     */
    public function userLetterOfRecommendations()
    {
        return $this->belongsTo(UserLetterOfRecommendation::class);
    }
}
