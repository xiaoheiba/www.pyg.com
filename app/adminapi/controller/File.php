<?php
declare (strict_types = 1);

namespace app\adminapi\controller;

use think\facade\Filesystem;
use think\Image;

class File
{
    public function singleFile()
    {
        $file = request()->file('image');
        if (empty($file))return success('1000','请先上传图片',['']);
        $img = Filesystem::disk('public')->putFile('',$file);
        return $img;
    }
}
