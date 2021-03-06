<?php
/**
 * Created by PhpStorm.
 * User: tingting
 * Date: 2017/10/25
 * Time: 17:51
 */

namespace Admin\Controller;

use Admin\Common\CommonController;
//use Think\Controller;

class IndexController extends CommonController
{

   //页面引入css时显示，让css文件起作用
  /*
   function index(){
        $this->display();
    }
*/
    public function login(){

        $USER_DB=D("User");
        $data=array();
        $user_name=I("user_name");
        $user_password=I("user_password");
        //$user_password=md5($user_password); //对密码进行加密
        $code=I("code");
        //检测用户是否存在
        $parameter_user_checkname=array(
            "where"=>array("user_name"=>$user_name)
        );
        $user_row=$USER_DB->scope("check_name",$parameter_user_checkname)->find();
        if($user_row)
        {
            //检测密码
            $parameter_user_checkpassword=array(
                "where"=>array(
                    "user_name"=>$user_name,
                    "user_password"=>$user_password
                )
            );
            $list=$USER_DB->scope("check_password",$parameter_user_checkpassword)->find();
            if($list)
            {
                if($this->check_verify($code))
                {
                    $data["result"]=true;
                    $data["code"]="1000";
                    $data["message"]="用户登录成功";
                    $user_session["user_id"]=$list["user_id"];
                    $user_session["user_name"]=$list["user_name"];
                    $_SESSION["user"]=$user_session;
                }
                else
                {
                    $data["result"]=false;
                    $data["code"]="7777";
                    $data["message"]="验证码错误";
                }
            }
            else
            {
                $data["result"]=false;
                $data["code"]="1001";
                $data["message"]="密码错误";
            }
        }
        else
        {
            $data["result"]=false;
            $data["code"]="1002";
            $data["message"]="用户不存在";
        }
        return $this->ajaxReturn($data);
    }



}