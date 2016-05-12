<?php namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class UnitRecord extends Model
{
    protected $table = 'tbl_unitRecords';
    protected $primaryKey = 'ur_id';
    
    public function Unit()
    {
        return $this->belongsTo('app\Models\Unit', 'ur_unit', 'u_id');
    }
    public function Status()
    {
        return $this->belongsTo('app\Models\Status', 'ur_status', 's_id');
    }
    public function Type()
    {
        return $this->belongsTo('app\Models\Type','ur_type', 't_id');
    }
}