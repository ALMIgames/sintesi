<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

    protected $table = 'tasks';

    protected $fillable = ['resum', 'task', 'id_client', 'id_worker', 'complete', ];

}