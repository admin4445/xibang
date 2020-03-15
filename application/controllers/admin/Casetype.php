<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Casetype extends MY_Controller {
    
    
    public function index()
    {

        //获取当期那控制器的名字
        $name = $this->uri->segment(2);
        //每页的数量
        $limit=2;
        //偏移量
        $offset = $this->uri->segment(4,0);
        //总条数
        $count  = $this->db->count_all_results('news_type');
        $this->load->library('session');
        //加载模型
        $this->load->model('Casetype_model');
        $casetype = $this->Casetype_model->get_list($limit,$offset);
       
        $url = site_url('admin/Casetype/index');
        $page = MYpages($url,$count,$limit,4,2);
        $data = array(
            'casetype'=>$casetype,
            'name'=>$name,
            'page'=>$page
        );
       
        
        $this->load->view('admin/casetype_list',$data);

    }

    public function add()
    {
        //获取当期那控制器的名字
        $name = $this->uri->segment(2);
        $this->load->library('session');
        if($this->input->post('sub')){
            $data['case_type_name']= $this->input->post('case_type_name');
            //加载模型
            $this->load->model('Casetype_model');
            $res = $this->Casetype_model->add_info($data);
            if($res){
                $url = site_url('admin/Casetype/index');
                echo "<script>alert('添加成功');window.location.href='".$url."'</script>";
            }else{
                $url = site_url('admin/Casetype/index');
                echo "<script>alert('添加失败');window.location.href='".$url."'</script>";
            }
        }
      
        
        $data = array(
            'name'=>$name
        );
        $this->load->view('admin/casetype_add.php',$data);

    }

    public function edit()
    {
       
         if($this->input->post('sub')){
            $data['case_type_name']= $this->input->post('case_type_name');
            $id = $this->input->post('case_type_id');
             //加载模型
             $this->load->model('Casetype_model');
             $res = $this->Casetype_model->edit_info($id,$data);
             if($res){
                $url = site_url('admin/Casetype/index');
                echo "<script>alert('修改成功');window.location.href='".$url."'</script>";
             }else{
                $url = site_url('admin/Casetype/index');
                echo "<script>alert('修改失败');window.location.href='".$url."'</script>";
             }

         }

          $this->load->library('session');
          //获取当期那控制器的名字
          $name = $this->uri->segment(2);
          //获取id
          $id = $this->uri->segment(4,0);
          
          //加载模型
          $this->load->model('Casetype_model');
      
          $info = $this->Casetype_model->find_info($id);
         
          $data = array(
            'name'=>$name,
            'info'=>$info
        );
        $this->load->view('admin/casetype_edit.php',$data);
       
    }

    public function del()
    {
      
        //获取id
        $id = $this->uri->segment(4);
        
        //加载模型
        $this->load->model('Casetype_model');
        $res = $this->Casetype_model->del_info($id);
        if($res){
            $url = site_url('admin/Casetype/index');
            echo "<script>alert('删除成功');window.location.href='".$url."'</script>";
        }else{  
            $url = site_url('admin/Casetype/index');
            echo "<script>alert('删除失败');window.location.href='".$url."'</script>";
        }

    }

    //上传图片
    public function do_upload()
    {
        $path = 'uploads/';
        if(!file_exists($path)){
            mkdir($path,0777);
        }

        $config['upload_path']      = $path;
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 1024*2;
        $config['max_width']        = 2000;
        $config['max_height']       = 2000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('img'))
        {
            $error = array('error' => $this->upload->display_errors());

                
                    $info['code']= 0;
                    
                    return $info;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

                    
                    $info['code']= 1;
                    $info['path'] =$path.$data['upload_data']['file_name'];
                    return $info;
        }
    }

} 