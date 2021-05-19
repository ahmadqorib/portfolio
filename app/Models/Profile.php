<?php

namespace App\Models;

use Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getPhotoUrlAttribute()
    {
        $urlPhoto = null;
        if(Storage::disk('public')->exists('profile/'.$this->photo)){
            $urlPhoto = Storage::disk('public')->url('profile/'.$this->photo);
        }

        return $urlPhoto;
    }
}
