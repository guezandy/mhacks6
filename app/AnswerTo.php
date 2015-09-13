<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerTo extends Model {
    protected $table = 'answer_to';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['question', 'count'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id', 'paragraph'];
}
