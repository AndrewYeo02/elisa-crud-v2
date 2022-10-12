<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    use HasFactory;

    protected $fillable = [
       'trainee_id','logname'
      ];

      protected $guarded = [
        'trainee_id'
       ];
      public function logbook() {
        return $this->belongsTo(Trainee::class,'trainee_id','id');
    }
     public function newTask() {
      return $this->hasMany(Logbook::class);
  }

  
}
