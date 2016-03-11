<?php
/**
 * @Author: itcats
 * @Date:   2016-01-20 21:48:39
 * @Last Modified by:   遇到
 * @Last Modified time: 2016-02-05 20:51:59
 *
 *用户操作模型
 *
 */
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{
    /**
     * 添加用户
     */
    public function add($data){
        $this->db->insert('user', $data);
    }

    /**
     * 代理商查看名下待审核用户
     */
    public function check($aid){
        $data = $this->db->select('*')->from('user')
                         ->group_start()
                         ->where('aid', $aid)//绑定代理商
                         ->where('state', '1')//1代表在审核中
                         ->join('userlevel', 'userlevel.lid = user.level')
                         ->group_end()
                         ->order_by('uid', 'DESC')
                         ->get()
                         ->result_array();
        return $data;
    }

    /**
     * 代理商查看名下未通过审核用户
     */
    public function check3($aid){
        $data = $this->db->select('*')->from('user')
                         ->group_start()
                         ->where('aid', $aid)//绑定代理商
                         ->where('state', '3')//3代表审核未通过
                         ->join('userlevel', 'userlevel.lid = user.level')
                         ->group_end()
                         ->order_by('uid', 'DESC')
                         ->get()
                         ->result_array();
        return $data;
    }

    /*
     *取出未通过审核用户的数据
     */
    public function getuser($uid){
        $data = $this->db->get_where('user', array('uid'=>$uid))->result_array();
        return $data;
    }


    /**
     * 代理商查看名下已审核用户
     */
    public function check2($aid){
        $data = $this->db->select('*')->from('user')
                         ->group_start()
                         ->where('aid', $aid)//绑定代理商
                         ->where('state', '2')//2代表审核完成
                         ->join('userlevel', 'userlevel.lid = user.level')
                         ->group_end()
                         ->order_by('uid', 'DESC')
                         ->get()
                         ->result_array();
        return $data;
    }

    /**
     * 管理员查看名下待审核用户
     */
    public function admincheck(){
        $data = $this->db->select('*')->from('user')
                         ->group_start()
                         ->where('state', '1')//1代表在审核中
                         ->join('userlevel', 'userlevel.lid = user.level')
                         ->join('agentuser','agentuser.aid = user.aid')//查看所有代理商名下
                         ->group_end()
                         ->order_by('uid', 'DESC')
                         ->get()
                         ->result_array();
        return $data;
    }

    /**
     * 1.审核代理商名下用户状态 审核中->审核完成 or 驳回
     * 2.更新用户资料
     */
    public function adminupdate($uid, $data){
        $this->db->update('user', $data, array('uid'=>$uid));
    }

}