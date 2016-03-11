<?php
/**
 * @Author: itcats
 * @Date:   2016-01-16 18:44:22
 * @Last Modified by:   itcats
 * @Last Modified time: 2016-01-27 21:35:05
 *
 *代理商登录控制器
 *
 */

defined('BASEPATH') OR exit('No direct script access allowed');
    /**
     * 登陆默认方法
     * @return [type] [description]
     */
class Login extends CI_Controller {
    //载入登录视图
    public function index()
    {
       $this->load->view('login/login');
    }

    //登录验证
    public function login_in()
    {
        //开启session
        if(!isset($_SESSION)){
            session_start();
        }
        //获取表单信息
        $username = $this->input->post('username');
        $passwd = $this->input->post('passwd');
        //载入代理商操作模型
        $this->load->model('agent_model', 'agent');
        $date = $this->agent->check($username);
        //p($date);die;
        //检测用户名密码是否正确
        if(!$date || $date[0]['passwd'] != md5($passwd)) error('用户名或者密码不正确');
        //登录成功记录session
        $sessionData = array(
            'aid'        => $date[0]['aid'],
            'manager'    => $date[0]['manager'],
            'agentname'  => $date[0]['agentname'],
            'address'    => $date[0]['address'],
            'identity'   => $date[0]['identity'],
            'qq'         => $date[0]['qq'],
            'wechat'     => $date[0]['wechat'],
            'email'      => $date[0]['email'],
            'phone'      => $date[0]['phone'],
            'alipayname' => $date[0]['alipayname'],
            'alipay'     => $date[0]['alipay'],
            'bankcard'   => $date[0]['bankcard'],
            'cardholder' => $date[0]['cardholder'],
            'bank'       => $date[0]['bank'],
            'discount'   => $date[0]['discount'],
            'jointime'   => $date[0]['jointime'],
            'nature'     => $date[0]['nature'],
            'logintime'  => time()
            );

        $this->session->set_userdata($sessionData);

        success('home', '登陆成功');

    }

    //退出登录
    public function login_out(){
        $this->session->sess_destroy();
        success('login','退出成功');
    }


}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */