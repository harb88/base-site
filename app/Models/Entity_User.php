<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Entity_User extends Model
{
    protected $table = 'entity_user';
    protected $primaryKey = 'user_id';
    public $timestamps = false;
    public function UserID()
    {
        return $this->belongsToMany('app\Models\User');
    }
}
