<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
//aggiunge array al _token che contiene i campi considerati dalla funzione fill() dentro alla funzione store
    protected $fillable = ['title', 'author', 'description', 'url'];
}
