<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration','aircraft','ata','description','type','licence','workType'
       ];
 
    public function Task() {
        return $this->belongsTo(Logbook::class);
    }
}
