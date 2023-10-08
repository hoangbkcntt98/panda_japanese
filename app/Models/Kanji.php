<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kanji extends Model
{
    use HasFactory;
    protected $table = 'kanji';

    protected $fillable = [
        'kanji',
        'vn_cn',
        'reading_on',
        'reading_kun',
        'meaning',
        'remember_kanji',
        'remember_sentence',
        'related_kanji_1',
        'related_kanji_2',
        'image_url',
    ];

    protected $visible = [
        'topic_name'
    ];

    public function topic()
    {
        return $this->belongsTo(KanjiTopic::class, 'kanji_topic_id');
    }

    public function words()
    {
        return $this->hasMany(KanjiSampleWord::class, 'kanji_id');
    }

    public function getTopicNameAttribute()
    {
        return $this->topic->name;
    }

    public function getSampleWordsAttribute()
    {
        $words = $this->words->pluck('word')->toArray();
        return implode("、", $words);
    }

    public static function getColumns()
    {
        return [
            'kanji',
            'vn_cn',
            'reading_on',
            'reading_kun',
            'meaning',
            'remember_kanji',
            'remember_sentence',
            'related_kanji_1',
            'related_kanji_2',
            'image_url',
        ];
    }
}
