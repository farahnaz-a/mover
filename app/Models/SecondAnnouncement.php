<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SecondAnnouncement extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getImage(){
        return $this->HasMany(Image::class, 'announcement_id', 'id');
    }
}
