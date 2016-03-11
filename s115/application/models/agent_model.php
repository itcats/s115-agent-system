<?php
/**
 * @Author: itcats
 * @Date:   2016-01-20 21:48:39
 * @Last Modified by:   itcats
 * @Last Modified time: 2016-02-01 14:00:17
 *
 *代理商操作模型
 *
 */
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agent_model extends CI_Model{
    /**
     * 1.验证代理商登录
     */
    public function check($username){
        $data = $this->db->get_where('agentuser', array('phone'=>$username))->result_array();
        return $data;
    }

    /**
     * 1.修改密码
     * 2.更新代理商信息
     */
    public function change($aid, $data){
        $this->db->update('agentuser', $data, array('aid'=>$aid));
    }

    /**
     * 添加代理商
     */
    public function add($data){
        $this->db->insert('agent', $data);
    }

    /**
     * 查询所有代理商
     */
    public function checkall(){
        $data = $this->db->get('agentuser')->result_array();
        return $data;
    }
}