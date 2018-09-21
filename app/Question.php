<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question';
    protected $primarykey = 'id';

    public function answerOption(){
    	return $this->belongsTo('App\AnswerOption','questionId');
    }
}
