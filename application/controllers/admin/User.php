<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
    
    public function index()
    {
        //表单验证
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', '用户名', 'required');
        $this->form_validation->set_rules('password', '密码', 'required');


        if ($this->form_validation->run() == FALSE)
        {
            
            redirect('admin/login/index', 'refresh');
            
        }
        else
        {
            $this->load->library('session');
            if(isset($_POST['sub'])){
                //验证验证码
                $code  = $this->input->post('code');
               

                $session_code = $this->session->userdata('code');
               
                if(strtolower($code) != $session_code){
                    $url = site_url('admin/login/index');
                    echo "<script>alert('验证码不正确');window.location.href='".$url."'</script>";
                }
                //验证用户是否存在
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                $res = $this->db->where(['admin_user'=>$username,'admin_pwd'=>md5($password)])->get('admin')->row_array();
                if($res != null){
                    $data = array(
                        'user'=>$res['admin_user'],
                        'islogin'=>1,
                        'admin_id'=>$res['admin_id']
                    );
                    $this->session->set_userdata($data);
                    $url = site_url('admin/Home/index');
                    echo "<script>alert('登陆成功');window.location.href='".$url."'</script>";
                }else{
                    $url = site_url('admin/login/index');
                    echo "<script>alert('用户名或者密码不正确');window.location.href='".$url."'</script>";
                }

        
            }
            
            
        }
    }

     //退出登陆
     public function loginout()
     {
         $this->load->library('session');
         $data = array('user','islogin','a_id');
         //删除session
         $this->session->unset_userdata('data');
          //彻底删除session
         $this->session->sess_destroy();
         $url = site_url('admin/login/index');
         echo "<script>alert('注销成功');window.location.href='".$url."'</script>";
 
 
     }


}

