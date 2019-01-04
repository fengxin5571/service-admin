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
use think\View;
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
        View::share('title', '数字套件');
        return $this->fetch(':numberSuite');
    }
    /*
     * 品牌营销
     */
    public function brandSale(){
        View::share('title', '品牌营销');
        return $this->fetch(':brandSale');
    }
    
}
