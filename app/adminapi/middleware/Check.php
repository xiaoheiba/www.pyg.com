<?php
declare (strict_types = 1);

namespace app\adminapi\middleware;

class Check
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        $controller = $request->controller();
        $action = $request->action();
        $key = md5($request->ip().$controller.$action);
        $times = cache($key) ? :1;
        if ($times > 3)
        {
            return fail('1001','访问太频繁，请稍后再试');
        }else{
            $times++;
        }
        cache($key,$times,60);
        return $next($request);
    }
}
