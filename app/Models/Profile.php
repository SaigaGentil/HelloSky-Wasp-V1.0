<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : '/storage/uploads/c6Ue4fZQ0juslrECtYrnV26vGGsvZl0vyhyrnVA5.png';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    use HasFactory;
    public  function user()
    {
        return $this->belongsTo((User::class));
    }
}
