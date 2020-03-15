<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends MY_Controller {
    
    public function index()
    {

         //获取当期那控制器的名字
         $name = $this->uri->segment(2);
        
        //每页的数量
        $limit=2;
        //偏移量
        $offset = $this->uri->segment(4,0);
        //总条数
        $count  = $this->db->count_all_results('banner');
        $this->load->library('session');
         //加载模型
        $this->load->model('Ban_model');
        $baninfo = $this->Ban_model->get_list($limit,$offset);
        $url = site_url('admin/Banner/index');
        $page = MYpages($url,$count,$limit,4,2);


         $data = array(
             'name'=>$name,
             'baninfo'=>$baninfo,
             'page'=>$page
         );
        $this->load->view('admin/ban_list',$data);

    }
    public function banadd()
    {
        if($this->input->post('sub')){
            $data['ban_name']=$this->input->post('ban_name');
            $imginfo  = $this->do_upload();
            if($imginfo['code']){
                $data['ban_url']=$imginfo['path'];
            }else{
                $url = site_url('admin/Banner/index');
                echo "<script>alert('图片上传失败');window.location.href='".$url."'</script>";
            }
           
            //加载模型
            $this->load->model('Ban_model');
            $res = $this->Ban_model->get_add($data);
            if($res){
                $url = site_url('admin/Banner/index');
                echo "<script>alert('添加成功');window.location.href='".$url."'</script>";
            }else{
                $url = site_url('admin/Banner/index');
                echo "<script>alert('添加失败');window.location.href='".$url."'</script>";
            }

        }
        //获取当期那控制器的名字
        $name = $this->uri->segment(2);
        $this->load->library('session');
        $data = array(
            'name'=>$name,
         
        );
       $this->load->view('admin/ban_add',$data);
        

    }

    public function banedit()
    {

        if($this->input->post('sub')){
            $data['ban_name'] = $this->input->post('ban_name');
            $id = $this->input->post('ban_id');
            $imgs  = $this->do_upload();
            if($imgs['code']==0){
                $info = $this->db->where('ban_id',$id)->get('banner')->row_array();
                $data['ban_url'] = $info['ban_url'];
            }else{
                  
                $data['ban_url'] =$imgs['path'];
            }

            //加载模型
            $this->load->model('Ban_model');
            $res= $this->Ban_model->edit_info($id,$data);
            if($res){
                $url = site_url('admin/Banner/index');
                echo "<script>alert('修改成功');window.location.href='".$url."'</script>";
            }else{
                $url = site_url('admin/Banner/index');
                echo "<script>alert('修改失败');window.location.href='".$url."'</script>";
            }
        }
         //获取当期那控制器的名字
         $name = $this->uri->segment(2);
         //获取轮播图id
         $id = $this->uri->segment(4);
         $this->load->library('session');
        //加载模型
        $this->load->model('Ban_model');
        $baninfo = $this->Ban_model->find_info($id);
         $data = array(
             'name'=>$name,
             'baninfo'=>$baninfo
          
         );
        $this->load->view('admin/ban_edit',$data);
    }

    public function bandel()
    {
         //获取id
         $id = $this->uri->segment(4);
        
         //加载模型
         $this->load->model('Ban_model');
         $res = $this->Ban_model->del_info($id);
         if($res){
             $url = site_url('admin/Banner/index');
             echo "<script>alert('删除成功');window.location.href='".$url."'</script>";
         }else{  
             $url = site_url('admin/Banner/index');
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