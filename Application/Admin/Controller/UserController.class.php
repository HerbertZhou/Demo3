<?php
/**
 * Created by PhpStorm.
 * User: tingting
 * Date: 2017/11/20
 * Time: 9:28
 */

namespace Admin\Controller;

use Admin\Common\CommonController;
class UserController extends CommonController
{
    public function add(){
        $this->display();
    }
    public function addDo(){
        $USER_DB=D("User");
        $user_name=I("user_name");
        $user_password=I("user_password");
        $user_password=md5($user_password); //对密码进行加密
        //检测用户是否存在
        $parameter_user_checkname=array(
            "where"=>array("user_name"=>$user_name)
        );
        $user_row=$USER_DB->scope("check_name",$parameter_user_checkname)->find();
        if(!$user_row)
        {
            //添加用户
            $parameter_user_adduser=array(
                "where"=>array(
                    "user_name"=>$user_name,
                    "user_password"=>$user_password
                ),
            );
            $row=$USER_DB->add($parameter_user_adduser["where"]);
            if($row)
            {
                $data["result"]=true;
                $data["code"]="1000";
                $data["message"]="添加用户成功";
            }
            else
            {
                $data["result"]=false;
                $data["code"]="1008";
                $data["message"]="用户添加失败";
            }
        }
        else
        {
            $data["result"]=false;
            $data["code"]="1005";
            $data["message"]="用户已存在";
        }
        return $this->ajaxReturn($data);
    }
}