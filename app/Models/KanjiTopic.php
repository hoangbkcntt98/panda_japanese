<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KanjiTopic extends Model
{
    use HasFactory;

    protected $table = "kanji_topic";
    protected $fillable = [
        'name'
    ];
}
