<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Works extends MY_Controller {
    
    public function index()
    {
        //获取当期那控制器的名字
        $name = $this->uri->segment(2);
        //每页的数量
        $limit=6;
        //偏移量
        $offset = $this->uri->segment(4,0);
        //总条数
        $count  = $this->db->count_all_results('works');
        $this->load->library('session');
         //加载模型
         $this->load->model('Woks_model');
         $worksinfo = $this->Woks_model->get_list($limit,$offset);
         $url = site_url('admin/Works/index');
         $page = MYpages($url,$count,$limit,4,2);
 
 
          $data = array(
              'name'=>$name,
              'worksinfo'=>$worksinfo,
              'page'=>$page
          );
         $this->load->view('admin/works_list',$data);


    }

    public function add()
    {
        if($this->input->post('sub')){
            $data['works_name']=$this->input->post('works_name');
            $data['works_author']=$this->input->post('works_author');
            $data['works_time'] =time();
            $imginfo  = $this->do_upload();
            if($imginfo['code']){
                $data['works_img']=$imginfo['path'];
            }else{
                $url = site_url('admin/Works/index');
                echo "<script>alert('图片上传失败');window.location.href='".$url."'</script>";
            }
           
            //加载模型
            $this->load->model('Woks_model');
            $res = $this->Woks_model->get_add($data);
            if($res){
                $url = site_url('admin/Works/index');
                echo "<script>alert('添加成功');window.location.href='".$url."'</script>";
            }else{
                $url = site_url('admin/Works/index');
                echo "<script>alert('添加失败');window.location.href='".$url."'</script>";
            }

        }
        //查询作者
        $author  = $this->db->get('team')->result_array();
        //获取当期那控制器的名字
        $name = $this->uri->segment(2);
        $this->load->library('session');
        $data = array(
            'name'=>$name,
            'author'=>$author
         
        );
       $this->load->view('admin/works_add',$data);
        

    }


    public function edit()
    {
        if($this->input->post('sub')){
            $id = $this->input->post('works_id');
            $data['works_name']=$this->input->post('works_name');
            $data['works_author']=$this->input->post('works_author');
            $data['works_time'] =time();
            $imgs  = $this->do_upload();
            if($imgs['code']==0){
                $info = $this->db->where('works_id',$id)->get('works')->row_array();
                $data['works_img'] = $info['works_img'];
            }else{
                  
                $data['works_img'] =$imgs['path'];
            }

            //加载模型
            $this->load->model('Woks_model');
            $res= $this->Woks_model->edit_info($id,$data);
            if($res){
                $url = site_url('admin/Works/index');
                echo "<script>alert('修改成功');window.location.href='".$url."'</script>";
            }else{
                $url = site_url('admin/Works/index');
                echo "<script>alert('修改失败');window.location.href='".$url."'</script>";
            }
        }
         //获取当期那控制器的名字
         $name = $this->uri->segment(2);
         //获取轮播图id
         $id = $this->uri->segment(4);
         $this->load->library('session');
        //加载模型
        $this->load->model('Woks_model');
        $worksinfo = $this->Woks_model->find_info($id);
        //查询作者
        $author  = $this->db->get('team')->result_array();
         $data = array(
             'name'=>$name,
             'worksinfo'=>$worksinfo,
             'author'=>$author
          
         );
        $this->load->view('admin/works_edit',$data);

    }

    public function del()
    {
         //获取id
         $id = $this->uri->segment(4);
        
         //加载模型
         $this->load->model('Woks_model');
         $res = $this->Woks_model->del_info($id);
         if($res){
             $url = site_url('admin/Works/index');
             echo "<script>alert('删除成功');window.location.href='".$url."'</script>";
         }else{  
             $url = site_url('admin/Works/index');
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