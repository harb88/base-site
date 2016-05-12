<?php namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'ref_types';
    protected $primaryKey = 't_id';
    public $timestamps = false;
    
    public function Unit()
    {
        return $this->hasMany('app\Models\Unit', 'ur_type');
    }
}