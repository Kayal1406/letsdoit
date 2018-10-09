<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravelista\Comments\Commentable;

class Discussiontopic extends Model
{
    use SoftDeletes, Commentable;

    protected $table = "discussiontopic";
    protected $fillable = ['id', 'user_id', 'title', 'description', 'description', 'deleted_at', 'created_at', 'updated_at'];
}
