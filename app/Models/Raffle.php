<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Raffle extends Model
{
    use HasFactory;

    protected $table = [
        'title',
        'description',
        'price',
        'ticket_amount',
        'sweepstakes_amount',
        'sweepstakes_date',
        'hash_file',
    ];

    public function participants(){
        return $this->belongsToMany(User::class,'raffles_users','raffle_id','user_id');
    }
}
