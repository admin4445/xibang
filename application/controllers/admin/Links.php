<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Links extends MY_Controller {
    
    
    public function index()
    {

        //获取当期那控制器的名字
        $name = $this->uri->segment(2);
        //每页的数量
        $limit=2;
        //偏移量
        $offset = $this->uri->segment(4,0);
        //总条数
        $count  = $this->db->count_all_results('nav');
        $this->load->library('session');
        //加载模型
        $this->load->model('Links_model');
        $links = $this->Links_model->get_list($limit,$offset);
        $url = site_url('admin/Links/index');
        $page = MYpages($url,$count,$limit,4,2);
        $data = array(
            'links'=>$links,
            'name'=>$name,
            'page'=>$page
        );
       
        
        $this->load->view('admin/links_list',$data);

    }

    public function add()
    {
        //获取当期那控制器的名字
        $name = $this->uri->segment(2);
        $this->load->library('session');
        if($this->input->post('sub')){
            $data['link_name']= $this->input->post('link_name');
            $data['link_url']= $this->input->post('link_url');
            //加载模型
            $this->load->model('Links_model');
            $res = $this->Links_model->add_info($data);
            if($res){
                $url = site_url('admin/Links/index');
                echo "<script>alert('添加成功');window.location.href='".$url."'</script>";
            }else{
                $url = site_url('admin/Links/index');
                echo "<script>alert('添加失败');window.location.href='".$url."'</script>";
            }
        }
        $data = array(
            'name'=>$name
        );
        $this->load->view('admin/links_add.php',$data);

    }

    public function edit()
    {
         if($this->input->post('sub')){
            $data['link_name']= $this->input->post('link_name');
            $data['link_url']= $this->input->post('link_url');
             $id = $this->input->post('link_id');
             //加载模型
             $this->load->model('Links_model');
             $res = $this->Links_model->edit_info($id,$data);
             if($res){
                $url = site_url('admin/Links/index');
                echo "<script>alert('修改成功');window.location.href='".$url."'</script>";
             }else{
                $url = site_url('admin/Links/index');
                echo "<script>alert('修改失败');window.location.href='".$url."'</script>";
             }

         }

          $this->load->library('session');
          //获取当期那控制器的名字
          $name = $this->uri->segment(2);
          //获取id
          $id = $this->uri->segment(4,0);
          
          //加载模型
          $this->load->model('Links_model');
          $info = $this->Links_model->find_info($id);
         
          $data = array(
            'name'=>$name,
            'info'=>$info
        );
        $this->load->view('admin/links_edit.php',$data);
       
    }

    public function del()
    {
      
        //获取id
        $id = $this->uri->segment(4);
        
        //加载模型
        $this->load->model('Links_model');
        $res = $this->Links_model->del_info($id);
        if($res){
            $url = site_url('admin/Links/index');
            echo "<script>alert('删除成功');window.location.href='".$url."'</script>";
        }else{  
            $url = site_url('admin/Links/index');
            echo "<script>alert('删除失败');window.location.href='".$url."'</script>";
        }

    }
} 