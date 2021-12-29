<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Raffle extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'ticket_amount',
        'sweepstakes_amount',
        'sweepstakes_date',
        'hash_file',
    ];

    protected static function boot(){
        parent::boot();
        static::creating(function($raffle){
            $raffle->hash_file =  md5(uniqid(mt_rand(),true));
        });
    }

    public function participants(){
        return $this->belongsToMany(User::class,'raffles_users','raffle_id','user_id');
    }


}
