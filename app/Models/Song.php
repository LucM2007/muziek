<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $table = 'songs'; //mag weg
    protected $primaryKey = 'id'; //mag weg
    protected $keytype = 'int'; //mag weg
    public $timestamps = true; //mag weg
    protected $fillable = ['title', 'singer'];
    public function albums()
    {
        return $this->belongsToMany(Albums::class, 'album_song');
    }
}
