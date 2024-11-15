<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    use HasFactory;
    protected $table = 'albums'; //mag weg
    protected $primaryKey = 'id'; //
    protected $keytype = 'int'; //
    public $timestamps = false;

    protected $fillable = ['name', 'year', 'times_sold'];

}
