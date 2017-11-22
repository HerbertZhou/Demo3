<?php
/**
 * Created by PhpStorm.
 * User: tingting
 * Date: 2017/11/1
 * Time: 14:38
 */

namespace Home\Controller;

use Think\Controller;
class BlogController extends Controller
{
    /*
     * Action参数绑定
     */
    /*
     * 1.按变量名绑定
     * 访问地址：localhost/Demo3/Home/Blog/read/id/5
     * localhost/Demo3/Home/Blog/archive/year/2013/month/11
     */
    /*
    public function read($id){
        echo 'id='.$id;
    }
    public function archive($year='2222',$month='333'){
        echo 'year='.$year.'month='.$month;
    }*/
    /*
     * 2.按顺序绑定
     * 操作方法的定义不需要改变，URL的访问地址分别改成：
    localhost/Demo3/Home/Blog/read/5
    localhost/Demo3/Home/Blog/archive/2013/11
     */

    /*
     * AJAX返回
     */
    /*
     public function ajax1(){
*/
        /*
         * ajaxReturn方法调用示例
         */
        /*
         $data = 'ok';
         $this->ajaxReturn($data);
       }*/
       //public function ajax2(){
           /*数组形式

           $data['status'] = '1';
           $data['content'] = 'content';
           $this->ajaxReturn($data);
       }
       public function ajax3(){*/
           /*
            * JSON返回格式

           $data['status'] = '1';
           $data['content'] = 'content';
           $this->ajaxReturn($data,'xml');
       }*/
       /*
        * 跳转
        */
       /*
       public function jump(){
           $User = M('User'); //实例化User对象
           $result = $User->add(1);
           /*
            * 第一个参数表示提示信息，第二个参数表示跳转地址，第三个参数是跳转时间（单位为秒）

           if($result){
               //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
               $this->success('新增成功', 'User/list',3);
           } else {
               //错误页面的默认跳转页面是返回前一页，通常不需要设置
               $this->error('新增失败');
           }
       }
       /*
        * 重定向
        * //重定向到New模块的Category操作
        $this->redirect('New/category', array('cate_id' => 2), 5, '页面跳转中...');
       //重定向到指定的URL地址
        redirect('/New/category/cate_id/2', 5, '页面跳转中...')
        复制代码
        Redirect函数的第一个参数是一个URL地址。
        */
       /*
        public function update(){
            if (IS_POST){
                $User = M('User');
                $User->create();
                $User->save();
                $this->success('保存完成');
            }else{
                $this->error('非法请求');
            }
        
        }
       */
       /*
        public function sl(){
            $User = M("User"); // 实例化User对象
            $User->where('user_id=1')->select();
        }
*/




}














