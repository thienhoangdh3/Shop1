<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassAcc extends Model
{
    protected $fillable = [
        'class',
    ];

    protected $table = 'class_accs';
    public $timestamps = false; 
    use HasFactory;

    public function class_nick()
    {
        return $this->hasMany( 'App\Models\Nick' , 'class_id', 'id' );
    }
    use HasFactory;
}