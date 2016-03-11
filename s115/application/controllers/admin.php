<?php
/**
 * @Author: itcats
 * @Date:   2016-01-27 20:52:12
 * @Last Modified by:   itcats
 * @Last Modified time: 2016-02-26 11:17:59
 *
 *管理员控制器
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    //载入管理员后台首页
    public function index()
    {
        $this->load->model('user_model', 'user');

        $data['user']=$this->user->admincheck();
        // p($data);die;

        //载入待审核用户视图
        $this->load->library('hulk_template');

        $this->hulk_template->parse('admin/admin_content_home',$data);
    }

    //载入管理员更改密码视图
    public function changepwd()
    {
        $this->load->library('hulk_template');

        $this->hulk_template->parse('admin/admin_content_changepwd');
    }

    //更改密码动作
    public function getchangepwd()
    {
        //载入管理员操作模型
        $this->load->model('admin_model', 'admin');
        $adminname = $this->session->userdata('name');
        $date = $this->admin->check($adminname);

        // p($date);die;
        // 获取原始密码
        $passwd = $this->input->post('passwd');
        $oldpassed = $date[0]['password'];
        if(md5($passwd) != $oldpassed) error('原始密码错误');

        //获取输入的密码
        $passwdF = $this->input->post('passwdF');
        $passwdS = $this->input->post('passwdS');

        if(!empty($passwdF) || !empty($passwdS)){

            if(md5($passwdF) == $oldpassed) error('新密码不能与原密码相同');

            if($passwdF != $passwdS) error('两次密码不相同');


            $id = $this->session->userdata('id');

            $data = array(
                'password' => md5($passwdF)
                );

            $this->admin->change($id,$data);

            success('admin/changepwd', '修改成功');
        }else{
            error('新密码不能为空');
        }
    }

    //载入添加管理员视图
    public function addadmin()
    {
        $this->load->library('hulk_template');

        $this->hulk_template->parse('admin/admin_content_addadmin');

    }

    //添加管理员动作
    public function getaddadmin()
    {
        $data = array(
            'name'     => $this->input->post('name'),
            'realname' => $this->input->post('realname'),
            'password' => md5($this->input->post('password')),
            'state'    => $this->input->post('state')   //默认为0，表示添加管理员为启用状态
            );
        // p($data);die;
        // 加载管理员操作模型
        $this->load->model('admin_model', 'admin');
        $this->admin->add($data);
        success('admin/addadmin', '添加管理员成功');

    }

    //载入添加代理商视图
    public function addagent()
    {
        //加载表单帮助类库
        $this->load->helper('form');

        $this->load->library('hulk_template');

        $this->hulk_template->parse('admin/admin_content_addagent');

    }

    //添加代理商动作
    public function getaddagent()
    {
        //载入表单验证类
        $this->load->library('form_validation');
        //验证规则
        $status = $this->form_validation->run('addagent');

        if($status){
            $data = array(
                'passwd'     => md5('123456'),
                'agentname'  => $this->input->post('agentname'),
                'address'    => $this->input->post('address'),
                'license'    => $this->input->post('license'),
                'manager'    => $this->input->post('manager'),
                'identity'   => $this->input->post('identity'),
                'qq'         => $this->input->post('qq'),
                'wechat'     => $this->input->post('wechat'),
                'email'      => $this->input->post('email'),
                'phone'      => $this->input->post('phone'),
                'alipay'     => $this->input->post('alipay'),
                'alipayname' => $this->input->post('alipayname'),
                'bankcard'   => $this->input->post('bankcard'),
                'cardholder' => $this->input->post('cardholder'),
                'bank'       => $this->input->post('bank'),
                'discount'   => $this->input->post('discount'),
                'jointime'   => $this->input->post('jointime'),
                'nature'     => $this->input->post('nature')
                );
            // p($data);die;
            // 加载代理商操作模型
            $this->load->model('agent_model', 'agent');

            $this->agent->add($data);

            success('admin/addagent', '添加代理商成功');
        }else {

            //加载表单帮助类库
            $this->load->helper('form');

            $this->load->library('hulk_template');

            $this->hulk_template->parse('admin/admin_content_addagent');

        }
    }


    //审核通过代理商名下用户动作
    public function getpassuser()
    {
        $uid = $this->input->post('uid');
        $data = array(
            'state' => $this->input->post('state')   //2，表示审核通过代理商名下用户
            );
        // p($data);die;
        // 加载用户操作模型
        $this->load->model('user_model', 'user');
        $this->user->adminupdate($uid,$data);
        success('admin/index', '审核通过');
    }

    //审核不通过代理商名下用户动作
    public function getnotpassuser()
    {
        $uid = $this->input->post('uid');
        $data = array(
            'state' => $this->input->post('state')  //3，表示驳回审核代理商名下用户修改资料后重新审核
            );
        // p($data);die;
        // 加载用户操作模型
        $this->load->model('user_model', 'user');
        $this->user->adminupdate($uid,$data);
        success('admin/index', '驳回审核');
    }

    //查看代理商视图
    public function checkagent()
    {
        //加载表单帮助类库
        $this->load->helper('form');

        //加载代理商操作模型
        $this->load->model('agent_model', 'agent');

        $data['agent']=$this->agent->checkall();

        $this->load->library('hulk_template');

        $this->hulk_template->parse('admin/admin_content_checkagent',$data);
    }

    //编辑代理商视图
    public function editagent()
    {
        //加载表单帮助类库
        $this->load->helper('form');

        //获取要编辑的代理商电话号码
        $username=$this->input->post('phone');

        //加载代理商操作模型
        $this->load->model('agent_model', 'agent');

        $data['agent']=$this->agent->check($username);

        $this->load->library('hulk_template');

        $this->hulk_template->parse('admin/admin_content_editagent',$data);
    }

    //添加代理商动作
    public function geteditagent()
    {
        $aid=$this->input->post('aid');

        $data = array(
            'agentname'  => $this->input->post('agentname'),
            'address'    => $this->input->post('address'),
            'license'    => $this->input->post('license'),
            'manager'    => $this->input->post('manager'),
            'identity'   => $this->input->post('identity'),
            'qq'         => $this->input->post('qq'),
            'wechat'     => $this->input->post('wechat'),
            'email'      => $this->input->post('email'),
            'phone'      => $this->input->post('phone'),
            'alipay'     => $this->input->post('alipay'),
            'alipayname' => $this->input->post('alipayname'),
            'bankcard'   => $this->input->post('bankcard'),
            'cardholder' => $this->input->post('cardholder'),
            'bank'       => $this->input->post('bank'),
            'discount'   => $this->input->post('discount'),
            'jointime'   => $this->input->post('jointime'),
            'nature'     => $this->input->post('nature')
            );
        // p($data);die;
        // 加载代理商操作模型
        $this->load->model('agent_model', 'agent');

        $this->agent->change($aid,$data);

        success('admin/checkagent', '更新代理商成功');

    }
}