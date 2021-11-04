<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reciept extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'code',
        'nick_id',
    ];

    protected $table = 'reciepts';

    public function users()
    {
        return $this->belongsTo( 'App\Models\User' , 'user_id', 'id' );
    }
    
    public function nicks()
    {
        return $this->belongsTo( 'App\Models\Nick' , 'nick_id', 'id' );
    }
}
