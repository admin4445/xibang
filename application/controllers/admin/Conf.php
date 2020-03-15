<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conf extends MY_Controller {
    
    
    public function index()
    {

        //获取当期那控制器的名字
        $name = $this->uri->segment(2);
        //每页的数量
        $limit=2;
        //偏移量
        $offset = $this->uri->segment(4,0);
        //总条数
        $count  = $this->db->count_all_results('conf');
        $this->load->library('session');
        //加载模型
        $this->load->model('Conf_model');
        $conf = $this->Conf_model->get_list($limit,$offset);
        $url = site_url('admin/Conf/index');
        $page = MYpages($url,$count,$limit,4,2);
        $data = array(
            'conf'=>$conf,
            'name'=>$name,
            'page'=>$page
        );
       
        
        $this->load->view('admin/conf_list',$data);

    }

    public function add()
    {
        //获取当期那控制器的名字
        $name = $this->uri->segment(2);
        $this->load->library('session');
        if($this->input->post('sub')){
            $data['conf_name']= $this->input->post('conf_name');
            $data['conf_copy']= $this->input->post('conf_copy');
            $data['conf_email']= $this->input->post('conf_email');
            $data['conf_tel']= $this->input->post('conf_tel');
            $data['conf_add']= $this->input->post('conf_add');
            //加载模型
            $this->load->model('Conf_model');
            $res = $this->Conf_model->add_info($data);
            if($res){
                $url = site_url('admin/Conf/index');
                echo "<script>alert('添加成功');window.location.href='".$url."'</script>";
            }else{
                $url = site_url('admin/Conf/index');
                echo "<script>alert('添加失败');window.location.href='".$url."'</script>";
            }
        }
        $data = array(
            'name'=>$name
        );
        $this->load->view('admin/conf_add.php',$data);

    }

    public function edit()
    {
         if($this->input->post('sub')){
            $data['conf_name']= $this->input->post('conf_name');
            $data['conf_copy']= $this->input->post('conf_copy');
            $data['conf_email']= $this->input->post('conf_email');
            $data['conf_tel']= $this->input->post('conf_tel');
            $data['conf_add']= $this->input->post('conf_add');
             $id = $this->input->post('conf_id');
             //加载模型
             $this->load->model('Conf_model');
             $res = $this->Conf_model->edit_info($id,$data);
             if($res){
                $url = site_url('admin/Conf/index');
                echo "<script>alert('修改成功');window.location.href='".$url."'</script>";
             }else{
                $url = site_url('admin/Conf/index');
                echo "<script>alert('修改失败');window.location.href='".$url."'</script>";
             }

         }

          $this->load->library('session');
          //获取当期那控制器的名字
          $name = $this->uri->segment(2);
          //获取id
          $id = $this->uri->segment(4,0);
          
          //加载模型
          $this->load->model('Conf_model');
          $info = $this->Conf_model->find_info($id);
         
          $data = array(
            'name'=>$name,
            'info'=>$info
        );
        $this->load->view('admin/Conf_edit.php',$data);
       
    }

    public function del()
    {
      
        //获取id
        $id = $this->uri->segment(4);
        
        //加载模型
        $this->load->model('Conf_model');
        $res = $this->Conf_model->del_info($id);
        if($res){
            $url = site_url('admin/Conf/index');
            echo "<script>alert('删除成功');window.location.href='".$url."'</script>";
        }else{  
            $url = site_url('admin/Conf/index');
            echo "<script>alert('删除失败');window.location.href='".$url."'</script>";
        }

    }
} 