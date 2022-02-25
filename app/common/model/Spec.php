<?php
declare (strict_types = 1);

namespace app\common\model;

use think\Model;

/**
 * @mixin \think\Model
 */
class Spec extends Model
{
    public function specvalue()
    {
        return $this->hasMany(Specvalue::class,'spec_id','id');
    }
}
