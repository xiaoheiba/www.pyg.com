<?php
declare (strict_types = 1);

namespace app\day5\model;

use think\Model;
use think\model\concern\SoftDelete;
/**
 * @mixin \think\Model
 */
class Student extends Model
{
    public function SexId()
    {
        return $this->hasOne(SexId::class,'sex_id','id');
    }
    public function getList()
    {
        return $this->with(['SexId'])->select()->toArray();
    }

    public function addData($data)
    {
        return $this->insert($data);
    }
    use SoftDelete;
    protected $deleteTime = 'delete_time';
    public function del($id)
    {

        return $this->destroy($id);
    }

}
