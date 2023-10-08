<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KanjiSampleWord extends Model
{
    use HasFactory;

    protected $table = 'kanji_sample_word';

    protected $fillable = [
        'kanji_id',
        'word',
        'sentence'
    ];
}
