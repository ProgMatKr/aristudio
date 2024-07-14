<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageModel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'message'];

    // Ustawienie nazwy tabeli
    protected $table = 'message';

    // Wyłączenie automatycznego dodawania znaczników czasowych
    public $timestamps = false;
}
