<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Texto extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function usuario() {
        return $this->belongsTo('App\Models\User', 'id_usuario');
      }
}
