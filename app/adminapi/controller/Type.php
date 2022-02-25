<?php
declare (strict_types = 1);

namespace app\adminapi\controller;

use app\common\model\Attribute;
use app\common\model\Spec;
use app\common\model\Specvalue;
use think\Db;

class Type
{
    /**
     * @return string|void
     * 查询类型数据
     */
    public function getTypeData()
    {
        try {
            $date = \app\common\model\Type::with(['spec','attribute','spec.Specvalue'])->find(16);
            dd($date);
        }catch (\Exception $exception){
            return $exception->getMessage();
        }

    }

    /**
     * @param $id
     * @return \think\response\Json
     * 删除类型数据
     */
    public function delTypeData($id)
    {

        //return $id;
        //Db::startTrans();
        try {
            Attribute::destroy(['type_id'=>$id]);
            Spec::destroy(['type_id'=>$id]);
            Specvalue::destroy(['type_id'=>$id]);
            \app\common\model\Type::destroy($id);
            //Db::commit();
            return success('201','删除成功');
        }catch (\Exception $exception){
            //Db::rollback();
            return json(['code'=>1000,'msg'=>'错误']);
        }
    }
    public function addTypeData()
    {

    }
}
