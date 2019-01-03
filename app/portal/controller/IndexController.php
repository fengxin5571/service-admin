<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 老猫 <thinkcmf@126.com>
// +----------------------------------------------------------------------
namespace app\portal\controller;

use app\admin\model\NavMenuModel;
use cmf\controller\HomeBaseController;
use tree\Tree;

class IndexController extends HomeBaseController
{
    /*
     * 官网首页
     */
    public function index()
    {
        return $this->fetch(':netWork');
    }
    /*
     * 数字套件
     */
    public function numberSuite(){
        return $this->fetch(':numberSuite');
    }
}
