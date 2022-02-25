<?php
declare (strict_types = 1);

namespace app\adminapi\controller;

class Login
{
    public function getCaptcha()
        {

            //验证码标识
            $uniqid = uniqid((string)mt_rand(100000, 999999));

            //返回数据 验证码图片路径、验证码标识
            $data = [
                'src' => 'http://www.adminapi.pyg.com' . captcha_src(),
                'uniqid' => $uniqid
            ];
            return success('success','添加成功',['']);

            //return success('success', 200, $data);
        }

        public function login()
        {

        }

}
