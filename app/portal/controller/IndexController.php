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
    /*
     * 大快消
     */
    public function bigQuick(){
        View::share('top_img', 'logo_kuaixiao.png');
        View::share('title', '大快消');
        return $this->fetch(':bigQuick');
    }
    /*
     * 大服饰
     */
    public function bigCloth(){
        View::share('top_img', 'logo_fushi.png');
        View::share('title', '大服饰');
        return $this->fetch(':bigCloth');
    }
    /*
     * 新农业
     */
    public function newAgriculture(){
        View::share('top_img', 'logo_xny.png');
        View::share('title', '新农业');
        return $this->fetch(':newAgriculture');
    }
    /*
     * 大健康
     */
    public function bigHealth(){
        View::share('top_img', 'logo_djk.png');
        View::share('title', '大健康');
        return $this->fetch(':bigHealth');
    }
    /*
     * 新教育
     */
    public function newEducation(){
        View::share('top_img', 'logo_xjy.png');
        View::share('title', '新教育');
        return $this->fetch(':newEducation');
    }
    /*
     * 新服务
     */
    public function newService(){
        View::share('top_img', 'logo_xfw.png');
        View::share('title', '新服务');
        return $this->fetch(':newService');
    }
    /*
     * 大美业
     */
    public function bigBeautiful(){
        View::share('top_img', 'logo_dmy.png');
        View::share('title', '大美业');
        return $this->fetch(':bigBeautiful');
    }
    /*
     * 大美家
     */
    public function bigHome(){
        View::share('top_img', 'logo_dmj.png');
        View::share('title', '大美家');
        return $this->fetch(':bigHome');
    }
    /*
     * 轻电商
     */
    public function lightLine(){
        View::share('top_img', 'logo_qds.png');
        View::share('title', '轻电商');
        return $this->fetch(':lightLine');
    }
    /*
     * 理想生活
     */
    public function wantLife(){
        View::share('top_img', 'logo_qds.png');
        View::share('title', '理想生活圈');
        return $this->fetch(':wantLife');
    }
}
