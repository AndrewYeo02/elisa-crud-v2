<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name', 'description', 'price'
    //   ];
      public function logbook() {
        return $this->belongsTo(Trainee::class);
    }
     public function newTask() {
      return $this->hasMany(Logbook::class);
  }

  
}
