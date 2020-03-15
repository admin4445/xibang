<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Industry extends MY_Controller {
    
    
    public function index()
    {
        //获取当期那控制器的名字
        $name = $this->uri->segment(2);
       
        $this->load->library('session');
        //加载模型
         $this->load->model('Ind_model');
         $indinfo = $this->Ind_model->get_list();
      
        $data = array(
            'name'=>$name,
            'indinfo'=>$indinfo
           
        );
       
        
        $this->load->view('admin/industry_list',$data);



    }

    public function add()
    {
        if($this->input->post('sub')){
            $data['industry_name']=$this->input->post('industry_name');
            $data['industry_edesc']=$this->input->post('industry_edesc');
            $data['industry_title']=$this->input->post('industry_title');
            $imginfo  = $this->do_upload();
            if($imginfo['code']){
                $data['industry_img']=$imginfo['path'];
            }else{
                $url = site_url('admin/Industry/index');
                echo "<script>alert('图片上传失败');window.location.href='".$url."'</script>";
            }
           
            //加载模型
            $this->load->model('Ind_model');
            $res = $this->Ind_model->get_add($data);
            if($res){
                $url = site_url('admin/Industry/index');
                echo "<script>alert('添加成功');window.location.href='".$url."'</script>";
            }else{
                $url = site_url('admin/Industry/index');
                echo "<script>alert('添加失败');window.location.href='".$url."'</script>";
            }

        }
        //获取当期那控制器的名字
        $name = $this->uri->segment(2);
        $this->load->library('session');
        $data = array(
            'name'=>$name,
         
        );
       $this->load->view('admin/industry_add',$data);
        

    }


    public function edit()
    {

        if($this->input->post('sub')){
            $id = $this->input->post('industry_id');
            $data['industry_name']=$this->input->post('industry_name');
            $data['industry_edesc']=$this->input->post('industry_edesc');
            $data['industry_title']=$this->input->post('industry_title');
          
            $imgs  = $this->do_upload();
            if($imgs['code']==0){
                $info = $this->db->where('industry_id',$id)->get('industry')->row_array();
                $data['industry_img'] = $info['industry_img'];
            }else{
                  
                $data['industry_img'] =$imgs['path'];
            }

            //加载模型
            $this->load->model('Ind_model');
            $res= $this->Ind_model->edit_info($id,$data);
            if($res){
                $url = site_url('admin/Industry/index');
                echo "<script>alert('修改成功');window.location.href='".$url."'</script>";
            }else{
                $url = site_url('admin/Industry/index');
                echo "<script>alert('修改失败');window.location.href='".$url."'</script>";
            }
        }
         //获取当期那控制器的名字
         $name = $this->uri->segment(2);
         //获取轮播图id
         $id = $this->uri->segment(4);
         $this->load->library('session');
        //加载模型
        $this->load->model('Ind_model');
        $indinfo = $this->Ind_model->find_info($id);
         $data = array(
             'name'=>$name,
             'indinfo'=>$indinfo
          
         );
        $this->load->view('admin/industry_edit',$data);
    }

    public function del()
    {
         //获取id
         $id = $this->uri->segment(4);
        
         //加载模型
         $this->load->model('Ind_model');
         $res = $this->Ind_model->del_info($id);
         if($res){
             $url = site_url('admin/Industry/index');
             echo "<script>alert('删除成功');window.location.href='".$url."'</script>";
         }else{  
             $url = site_url('admin/Industry/index');
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