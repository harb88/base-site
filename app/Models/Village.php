<?php namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $table = 'tbl_villages';
    protected $primaryKey = 'v_id';
    public $timestamps = false;
    
    public function Unit()
    {
        return $this->hasMany('app\Models\Unit', 'u_village');
    }
}