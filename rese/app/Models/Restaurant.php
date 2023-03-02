<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'img_url', 'comment'];

    public function detail() {
        return $this->hasOne('App\Models\Detail');
    }
}
