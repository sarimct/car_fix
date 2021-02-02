<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ThreadUser extends Model
{
    use SoftDeletes;

    public $table = 'thread_users';

    public $fillable = [
        'thread_id', 'user_id'
    ];


//    public function thread(){
//        return $this->belongsTo(Thread::class);
//    }

}