<?php namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'ref_status';
    protected $primaryKey = 's_id';
    public $timestamps = false;
    
    public function Unit()
    {
        return $this->hasMany('app\Models\Unit', 'ur_status');
    }
}