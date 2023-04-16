<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'cname',
        'account',
        'adress',
        'telefon'
    ];
    public function getAvatarUrl()
    {
        if ($this->photo_extension)
            return asset('images/users/' . $this->id . '.' . $this->photo_extension);
        return asset('images/users/default.jpg');
    }
}
