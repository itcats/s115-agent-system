<?php
/**
 * @Author: itcats
 * @Date:   2016-01-27 14:00:37
 * @Last Modified by:   itcats
 * @Last Modified time: 2016-05-11 14:16:52
 *
 *管理员登录控制器 测试
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');
    /**
     * 登陆默认方法
     * @return [type] [description]
     */
class Adminlogin extends CI_Controller {
    //载入管理员登录视图
    public function index()
    {
       $this->load->view('adminlogin/adminlogin');
    }

    //登录验证
    public function login_in()
    {
        //开启session
        if(!isset($_SESSION)){
            session_start();
        }
        //获取表单信息
        $adminname = $this->input->post('adminname');
        $passwd    = $this->input->post('adminpasswd');
        //载入管理员操作模型
        $this->load->model('admin_model', 'admin');
        $date = $this->admin->check($adminname);
        // p($date);die;
        //检测管理员密码是否正确
        if(!$date || $date[0]['password'] != md5($passwd)) error('用户名或者密码不正确');
        //登录成功记录session
        $sessionData = array(
            'id'        => $date[0]['id'],
            'name'      => $date[0]['name'],
            'realname'  => $date[0]['realname'],
            'logintime' => time()
            );
        $this->session->set_userdata($sessionData);

        //记录登录时间
        $id = $this->session->userdata('id');
        $data = array(
            'logintime' => $this->session->userdata('logintime')
            );

        //记录管理员登录时间，更新到admin表
        $this->admin->logintime($id,$data);

        success('admin', '登陆成功');

    }

    //退出登录
    public function login_out(){
        $this->session->sess_destroy();
        success('adminlogin','退出成功');
    }

}