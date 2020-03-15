<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
    
    public function index()
    {
        //获取当期那控制器的名字
        $name = $this->uri->segment(2);
        $this->load->library('session');
        $id = $this->session->userdata('admin_id');
        $info = $this->db->where('admin_id',$id)->get('admin')->row_array();
        $admin_info['os'] = PHP_OS;
        $admin_info['php_v'] = PHP_VERSION;
        $admin_info['mysql_v'] = $this->db->version();
        $data = array('info'=>$info,'conf'=>$admin_info,'name'=>$name);
    
        $this->load->view('admin/index',$data);

    }

}