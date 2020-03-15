<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
  
    public $code;
    public function __construct()
    {
        parent::__construct();
        $code = $this->img_code();
        $this->code=$code;
         
    }

   
	public function index()
	{
       //表单验证
       $this->load->helper('form');
       $this->load->library('form_validation');
        $data = array('code'=>$this->code);
        $this->load->view('admin/login',$data);
    }

    //生成验证码
    public function img_code()
    {
        $this->load->helper('captcha');
        $path = './captcha/';
        if(!is_dir($path)){
            mkdir($path,0777,TRUE);
        }
        $vals = array(
            'word'      => '',
            'img_path'  => './captcha/',
            'img_url'   => 'http://www.xbang.com/captcha/',
            'font_path' => './static/admin/fonts/texb.ttf',
            'img_width' => '100',
            'img_height'    => 33,
            'expiration'    => 7200,
            'word_length'   => 4,
            'font_size' => 16,
            'img_id'    => 'imgid',
            'pool'      => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
            'colors'    => array(
                'background' => array(rand(254, 255), rand(10, 255), rand(15, 255)),
                'border' => array(rand(5, 255),rand(115, 255),rand(1, 255)),
                'text' => array(rand(15, 255), rand(255, 255), rand(100, 255)),
                'grid' => array(rand(0, 255), rand(0, 255), rand(0, 255))
            )
        );
        
      
        $cap = create_captcha($vals);
        $this->load->library('session');
        $this->session->set_userdata(['code'=>strtolower($cap['word'])]);
        $iscode = $this->input->post('code');
        if($iscode==1){
             echo $cap['image'];
        }else{
             return   $cap['image'] ;
        }
    }
} 


