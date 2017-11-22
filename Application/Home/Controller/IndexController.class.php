<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
        /*$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');*/
       /*
        $mode = '111';
        echo "$mode";

        echo "hello word";

        $model = C('DB_TYPE');

        echo "$model";

        C('USER_NAME','小陈');
        $u = C('USER_NAME');
        echo "$u";
        */
    }

    /*
     * Home\IndexController类就代表了Home模块下的Index控制器，
     * 而hello操作就是Home\IndexController类的hello（公共）方法。
     */
    public function hello(){
        echo "hello thinkphp";
    }

    public function test(){
        echo "test";
    }
    /*
     * 操作方法必须是公共的否则会出现报错，无法访问控制方法。
     */
    protected function text(){
        echo "text";
    }

    /*
     * 访问路径：localhost/Demo3/Home/Index/list
     * 可输出listAction
     * 使用此函数使用时，要写配置文件：'ACTION_SUFFIX'         =>  'Action',//操作方法后缀

    public function listAction(){
        echo "listAction";
    }
*/
    /*
     * 前置后置操作
     */
    public function index1(){
        echo "index<br/>";
    }
    /*前置操作*/
    public function _before_index1(){
        echo "before<br/>";
    }
    /*后置操作*/
    public function _after_index1(){
        echo "after<br/>";
    }








}