<?php
declare (strict_types = 1);

namespace app\common\model;

use think\Model;

/**
 * @mixin \think\Model
 */
class Goods extends Model
{
    protected $table='pyg_goods';

    public function SpecGoods()
    {
        return $this->hasMany(SpecGoods::class,'goods_id','id');
    }
    public function GoodsImage()
    {
        return $this->hasMany(GoodsImages::class,'goods_id','id');
    }
}
