<?php

namespace App\Models;

use App\Models\Federation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'federation_id'
    ];
    
    public function Federation()
    {
        return $this->hasOne(Federation::class);
    }
}
