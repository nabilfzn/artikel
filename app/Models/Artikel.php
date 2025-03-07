<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikels';
    protected $fillable = ['judul', 'konten', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
