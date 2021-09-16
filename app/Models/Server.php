<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $fillable = [
        'sv_name',
    ];

    protected $table = 'servers';
    public $timestamps = false; 
    use HasFactory;

    public function sv_nick()
    {
        return $this->hasMany( 'App\Models\Nick' , 'sv_id', 'id' );
    }
    use HasFactory;
}