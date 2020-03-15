<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends MY_Controller {
	public function index()
	{
        //加载模型
        $this->load->model('Company_model');
        //查出关于类型
        $type = $this->Company_model->get_info();

        //查询企业文化
        $wenhua = $this->db->where('abo_type_id',2)->get('abo_libimg')->result_array();
        //查询企业文化
        $huanjin = $this->db->where('abo_type_id',3)->get('abo_libimg')->result_array();
      
       
        $data = array(
            'type'=>$type,
            'wenhua'=>$wenhua,
            'huanjin'=>$huanjin
        );
        
        $this->load->view('company',$data);

    }
}   