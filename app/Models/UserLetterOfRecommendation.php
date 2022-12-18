<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLetterOfRecommendation extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'description',
    ];

    /**
     * Get the user cv for the letter recommendation.
     */
    public function userCv()
    {
        return $this->belongsTo(UserCv::class, 'cv_id');
    }
}
