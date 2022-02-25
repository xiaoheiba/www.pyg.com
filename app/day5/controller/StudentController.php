<?php
declare (strict_types = 1);

namespace app\day5\controller;

use app\day5\model\SexId;
use app\day5\model\Student;

class StudentController
{
    public function getList()
    {
        $objData = new Student();
        $data = $objData->getList();
        return view('/list',['data'=>$data]);
    }
    public function getForm()
    {
        $dexDATA = SexId::select();
        //dd($dexDATA);
        return view('/from',['data'=>$dexDATA]);

    }
    public function addData()
    {
        $data = request()->post();
        $obj = new Student();
        $res = $obj->addData($data);
        if (!$res) return json(['code'=>200,'msg'=>'数据有误','data'=>['']]);
        return redirect('show');
    }
    public function del($id)
    {
        $obj = new Student();
        $res = $obj->del($id);
        if (!$res) return json(['code'=>200,'msg'=>'删除数据有误','data'=>['']]);
        return redirect('show');
    }
}
