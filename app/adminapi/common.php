<?php
// 这是系统自动生成的公共文件



    /**
     * 密码加密的公共方法
     */
if (!function_exists('passwordEncrypt'))
{
    function passwordEncrypt($password)
    {
        $salt = '1911A';
        return md5($salt . $password . $salt);
    }
}

/**
 * 公共响应方法
 */
if (!function_exists('responses')) {
    /**
     * 公共响应方法
     * @param $code
     * @param $msg
     * @param $data
     * @return \think\response\Json
     */
    function responses($code, $msg, $data)
    {
        return json(['code' => $code, 'msg' => $msg, 'data' => $data]);
    }
}
/**
 * 公共响应成功方法
 */
if (!function_exists('success')) {
    /**
     * 公共响应成功方法
     * @param string $code
     * @param string $msg
     * @param array $data
     * @return \think\response\Json
     */
    function success($code = '200', $msg = 'ok', $data = [])
    {
        return responses($code, $msg, $data);
    }
}
/**
 * 公共响应失败方法
 */
if (!function_exists('fail')) {
    /**
     * @param string $code
     * @param $msg
     * @param $data
     * @return \think\response\Json
     */
    function fail($code = '2001', $msg = '参数不正确', $data = [])
    {
        return responses($code, $msg, $data);
    }
}
