<?php
/**
 * @Author: itcats
 * @Date:   2016-01-27 15:31:11
 * @Last Modified by:   itcats
 * @Last Modified time: 2016-01-28 15:57:34
 *
 *管理员模型
 *
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model{
    /**
     * 查询管理员数据
     */
    public function check($adminname){
        $data = $this->db->get_where('admin', array('name'=>$adminname))->result_array();
        return $data;
    }

    /**
     * 添加管理员
     */
    public function add($data){
        $this->db->insert('admin', $data);
    }

    /**
     * 修改密码
     */
    public function change($id, $data){
        $this->db->update('admin', $data, array('id'=>$id));
    }

    /**
     * 记录登录时间
     */
    public function logintime($id, $data){
        $this->db->update('admin', $data, array('id'=>$id));
    }

}