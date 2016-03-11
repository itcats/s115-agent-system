<?php
/**
 * @Author: itcats
 * @Date:   2016-01-16 21:26:53
 * @Last Modified by:   遇到
 * @Last Modified time: 2016-02-12 19:49:03
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    //载入代理商后台首页
    public function index()
    {
        $this->load->library('hulk_template');

        $this->hulk_template->parse('home/content_home');
    }


    //载入个人信息视图
    public function perinfo()
    {
        $this->load->library('hulk_template');

        $this->hulk_template->parse('home/content_perinfo');
    }


    //载入更改密码视图
    public function changepwd()
    {
        $this->load->library('hulk_template');

        $this->hulk_template->parse('home/content_changepwd');
    }


    //更改密码动作
    public function getchangepwd()
    {
        //载入代理商操作模型
        $this->load->model('agent_model', 'agent');
        $username = $this->session->userdata('phone');
        $date = $this->agent->check($username);

        // p($date);die;
        // 获取原始密码
        $passwd = $this->input->post('passwd');
        $oldpassed = $date[0]['passwd'];
        if(md5($passwd) != $oldpassed) error('原始密码错误');

        //获取输入的密码
        $passwdF = $this->input->post('passwdF');
        $passwdS = $this->input->post('passwdS');

        if(!empty($passwdF) || !empty($passwdS)){
            if(md5($passwdF) == $oldpassed) error('新密码不能与原密码相同');

            if($passwdF != $passwdS) error('两次密码不相同');


            $aid = $this->session->userdata('aid');

            $data = array(
                'passwd'    => md5($passwdF)
                );

            $this->agent->change($aid,$data);

            success('home/changepwd', '修改成功');
        }else{
            error('新密码不能为空');
        }
    }


    //添加用户信息视图
    public function adduser()
    {
        //加载用户等级操作模型
        $this->load->model('level_model', 'level');
        $data['level'] = $this->level->check();

        //获取代理商aid
        $data['aid'] = $this->session->userdata('aid');

        //加载表单帮助类库
        $this->load->helper('form');

        $this->load->library('hulk_template');

        $this->hulk_template->parse('home/content_adduser',$data);

    }


    //添加用户信息动作
    public function getadduser()
    {
        //载入表单验证类
        $this->load->library('form_validation');
        //验证规则
        $status = $this->form_validation->run('adduser');

        if($status){
            $data = array(
                'uname'        => $this->input->post('uname'),
                'mobile'       => $this->input->post('mobile'),
                'email'        => $this->input->post('email'),
                'level'        => $this->input->post('level'),
                'registertime' => $this->input->post('registertime'),
                'state'        => $this->input->post('state'),
                'aid'          => $this->input->post('aid')
                );
            // p($data);die;
            // 加载用户操作模型
            $this->load->model('user_model', 'user');
            $this->user->add($data);
            success('home/adduser', '添加用户成功');
        }else {
            //加载用户等级操作模型
            $this->load->model('level_model', 'level');
            $data['level'] = $this->level->check();

            //获取代理商aid
            $data['aid'] = $this->session->userdata('aid');

            //加载表单帮助类库
            $this->load->helper('form');

            $this->load->library('hulk_template');

            $this->hulk_template->parse('home/content_adduser',$data);

        }
    }


    //待审核用户列表视图
    public function usercheck()
    {
        //获取代理商aid
        $aid = $this->session->userdata('aid');
        //加载用户等级操作模型
        $this->load->model('user_model', 'user');
        $data['user']=$this->user->check($aid);
        // p($data);die;
        $this->load->library('hulk_template');

        $this->hulk_template->parse('home/content_usercheck',$data);
    }

    //未通过审核用户列表视图
    public function usernotpass()
    {
        //获取代理商aid
        $aid = $this->session->userdata('aid');
        //加载用户等级操作模型
        $this->load->model('user_model', 'user');
        $data['user']=$this->user->check3($aid);
        // p($data);die;
        $this->load->library('hulk_template');

        $this->hulk_template->parse('home/content_usernotpass',$data);
    }

    //编辑未通过审核用户视图
    public function edituser()
    {
        //加载用户等级操作模型
        $this->load->model('level_model', 'level');
        $data['level'] = $this->level->check();

        //获取要编辑的用户uid
        $uid = $this->input->post('uid');

        //加载用户等级操作模型
        $this->load->model('user_model', 'user');
        $data['user']=$this->user->getuser($uid);

        //加载表单帮助类库
        $this->load->helper('form');

        $this->load->library('hulk_template');

        $this->hulk_template->parse('home/content_edituser',$data);
    }

    //编辑用户信息动作
    public function getedituser()
    {
        //载入表单验证类
        $this->load->library('form_validation');
        //验证规则
        $status = $this->form_validation->run('adduser');

        if($status){
            $data = array(
                'uname'        => $this->input->post('uname'),
                'mobile'       => $this->input->post('mobile'),
                'email'        => $this->input->post('email'),
                'level'        => $this->input->post('level'),
                'registertime' => $this->input->post('registertime'),
                'state'        => $this->input->post('state'),
                'aid'          => $this->input->post('aid')
                );
            
            // 加载用户操作模型
            $uid = $this->input->post('uid');
            $this->load->model('user_model', 'user');
            $this->user->adminupdate($uid,$data);
            success('home/usernotpass', '编辑用户成功');
        }else {
        //加载用户等级操作模型
        $this->load->model('level_model', 'level');
        $data['level'] = $this->level->check();

        //获取要编辑的用户uid
        $uid = $this->input->post('uid');

        //加载用户等级操作模型
        $this->load->model('user_model', 'user');
        $data['user']=$this->user->getuser($uid);

        //加载表单帮助类库
        $this->load->helper('form');

        $this->load->library('hulk_template');

        $this->hulk_template->parse('home/content_edituser',$data);

        }
    }

    //用户列表视图
    public function userlist()
    {
        //获取代理商aid
        $aid = $this->session->userdata('aid');
        //加载用户操作模型
        $this->load->model('user_model', 'user');
        $data['user']=$this->user->check2($aid);

        $this->load->library('hulk_template');

        $this->hulk_template->parse('home/content_userlist',$data);
    }


    //所有服务器视图，未开始
    public function serverlist()
    {
        //获取代理商aid
        $aid = $this->session->userdata('aid');
        //加载用户等级操作模型
        $this->load->model('user_model', 'user');
        $data['user']=$this->user->check2($aid);

        $this->load->library('hulk_template');

        $this->hulk_template->parse('home/content_userlist',$data);
    }
}
/* End of file Home.php */
/* Location: ./application/controllers/Home.php */