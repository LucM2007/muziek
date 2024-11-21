<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Band extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'genre', 'founded', 'active_until'];
    public function albums()
    {
        return $this->hasMany(Albums::class, 'band_id');
    }
}
