<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestPlayers extends Model
{
    protected $fillable = [
    	'event_id',
	    'user_id',
	    'confirmParticipation',
    ];

    public $timestamps = false;
}
