<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Paragraph extends Model {
    protected $table = 'paragraph';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['text', 'question'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];
}
