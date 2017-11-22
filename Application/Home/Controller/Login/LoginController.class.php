<?php
/**
 * Created by PhpStorm.
 * User: tingting
 * Date: 2017/9/12
 * Time: 9:55
 */

namespace Home\Controller;


class LoginController extends Controller{

    public function index(){
        $this->display();
    }

    public function checkLogin($uname,$password){
        $data = array();
        if(!empty($uname) && !empty($password)){
            $data['status'] = 1;
            $data['info'] = "登陆成功";
            $data['url'] = U('Login/index');
        }else{
            $data['status'] = 0;
            $data['info'] = '用户名密码不能为空';
            $data['url'] = U('Login/index');
        }
        $this->ajaxReturn($data);
    }

}