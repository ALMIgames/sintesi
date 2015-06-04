<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model {

    protected $table = 'mail';

    protected $fillable = ['subject', 'message', 'id_from', 'id_to', 'thread', ];

}