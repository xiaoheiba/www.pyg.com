<?php
declare (strict_types = 1);

namespace app\adminapi\controller;
use thans\jwt\Token;
use think\facade\Db;
use think\Image;
use think\Request;

class Goods
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index($page,$search)
    {
        if (empty($page))
        {
            $page = 5;
        }
        if (empty($search))
        {
            $search = true;
        }
        Db::startTrans();
        try {
            $data = \app\common\model\Goods::where('goods_name','like',"%$search%")->with(['SpecGoods','GoodsImage'])->paginate($page)->toArray();
            //dd($data);
            Db::commit();
            return fail('201','ok',["$data"]);
        }catch (\Exception $exception){
            Db::rollback();
            return json($exception->getMessage(),$exception->getCode());
        }

    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create(Request $request)
    {


    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {

        $parans = $request->post();
        //return  json($data);
        Db::startTrans();
        try {
//INSERT INTO `pyg`.`pyg_goods`(`id`, `goods_name`, `goods_price`, `market_price`, `cost_price`, `goods_number`,
// `frozen_number`, `goods_remark`, `goods_desc`, `goods_logo`, `type_id`, `brand_id`, `cate_id`, `mould_id`,
// `weight`, `volume`, `keywords`, `comments_num`, `collect_num`, `sales_num`, `is_on_sale`, `is_free_shipping`,
// `is_recommend`, `is_new`, `is_hot`, `sort`, `suppliers_id`, `goods_attr`, `create_time`, `update_time`, `delete_time`)

           // $image = Image::open($parans['goods_logo']);

            $data = [
                'goods_name'=>$parans['goods_name'],
                'goods_price'=>$parans['goods_price'],
//                'market_price'=>$parans['market_price'],
//                'cost_price'=>$parans['cost_price'],
//                'goods_number'=>$parans['goods_number'],
//                'goods_remark'=>$parans['goods_remark'],
//                'goods_desc'=>$parans['goods_desc'],
//                'goods_logo'=>$parans[''],
//                'type_id'=>$parans['type_id'],
//                'brand_id'=>$parans['brand_id'],
//                'cate_id'=>$parans['cate_id'],
//                'mould_id'=>$parans['mould_id'],
//                'weight'=>$parans['weight'],
//                'volume'=>$parans['volume'],
//                'keywords'=>$parans['keywords'],
//                'comments_num'=>$parans['comments_num'],
//                'collect_num'=>$parans['collect_num'],
//                'sales_num'=>$parans['sales_num'],
//                'is_on_sale'=>$parans['is_on_sale'],
//                'is_free_shipping'=>$parans['is_free_shipping'],
//                'is_recommend'=>$parans['is_recommend'],
//                'is_new'=>$parans['is_new'],
//                'is_hot'=>$parans['is_hot'],
//                'sort'=>$parans['sort'],
//                'suppliers_id'=>$parans['suppliers_id'],
//                'goods_attr'=>$parans['goods_attr'],
//                'create_time'=>time(),
//                'update_time'=>$parans['update_time'],
            ];

            // dd($parans['goods_name']);
            $obj = \app\common\model\Goods::create($data);
            return success('200','添加成功',['']);
            Db::commit();
        }catch (\Exception $exception){
            Db::rollback();
            return json($exception->getMessage(),$exception->getPrevious());
        }



    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
       $data =  $request->get();
       return $data;
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
