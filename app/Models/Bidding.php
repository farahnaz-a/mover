<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidding extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getmover()
    {
        return $this->belongsTo('App\Models\User', 'mover_id', 'id');
    }
    public function getcustomer()
    {
        return $this->belongsTo('App\Models\User', 'customer_id', 'id');
    }
    public function getAnnouncement()
    {
        return $this->belongsTo('App\Models\SecondAnnouncement', 'announcement_id', 'id');
    }
}
