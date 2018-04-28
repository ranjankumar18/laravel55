<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookInfo extends Model
{
    protected $fillable = ['noteId', 'noteName', 'noteType'];
}
