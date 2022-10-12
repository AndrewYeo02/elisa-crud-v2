<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newTask extends Model
{
    use HasFactory;


    public function newTask() {
        return $this->belongsTo(Logbook::class);
    }
}
