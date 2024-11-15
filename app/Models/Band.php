<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;
    protected $table = 'bands'; //mag weg
    protected $primaryKey = 'id'; //mag weg
    protected $keytype = 'int'; //mag weg
    public $timestamps = true; //mag weg
    protected $attributes = [
        'active_until' => 'heden',
    ];
    
    protected $fillable = ['', ''];
}
