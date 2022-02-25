<?php
declare (strict_types = 1);

namespace app\common\model;

use think\Model;

/**
 * @mixin \think\Model
 */
class Type extends Model
{
    protected $table='pyg_type';

    public function spec()
    {
        return $this->hasMany(Spec::class,'type_id','id');
    }
    public function attribute()
    {
        return $this->hasMany(Attribute::class,'type_id','id');
    }
}
