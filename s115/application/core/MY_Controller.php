<?php
/**
 * @Author: itcats
 * @Date:   2016-01-20 14:42:38
 * @Last Modified by:   itcats
 * @Last Modified time: 2016-01-21 14:51:10
 *
 *自定义控制器
 *检测用户是否登录
 *
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
    public function __construct(){
        parent::__construct();

        $aid = $this->session->userdata('aid');
        $username = $this->session->userdata('phone');

        if(!$username || !$aid) {
            redirect('login');
        }
    }
}