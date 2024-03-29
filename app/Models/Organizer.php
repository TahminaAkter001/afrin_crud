<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    use HasFactory;
    protected $guarded= [];
    public function shows()
    {
        return $this->hasMany(FashionShow::class, 'organizer_id');
    }
}
