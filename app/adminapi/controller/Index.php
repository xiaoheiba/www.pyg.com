<?php
declare (strict_types = 1);

namespace app\adminapi\controller;
use thans\jwt\facade\JWTAuth;
use thans\jwt\Token;

class Index
{
    public function index()
    {
//        $token =Token(200);
//        dump($token);

        //return fail('201','错误',['']);
        return $token = JWTAuth::builder(['uid' => 1]);//参数为用户认证的信息，请自行添加
    }
}
