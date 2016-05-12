<?php namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'tbl_units';
    protected $primaryKey = 'u_id';
    public $timestamps = false;
    public function UnitRecord()
    {
        return $this->hasMany('app\Models\UnitRecord', 'ur_unit');
    }
    public function Village()
    {
        return $this->belongsTo('app\Models\Village', 'u_village', 'v_id');
    }
}