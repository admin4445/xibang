<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends MY_Controller {
	public function index()
	{
        //加载模型
        $this->load->model('Contact_model');
        $info = $this->Contact_model->get_info();
        $data =array(
            'info'=>$info
        );

        $this->load->view('lianxi',$data);

    }


    public function eamil()
	{

        $this->load->view('email');
       
        
    }

    public function sendemail(){
        $sub =$this->input->post('sub');
        if(isset($sub)){
            //发件人姓名
            $name =$this->input->post('name');
            //设置收件人地址
            $email =$this->input->post('address');
            //发件人内容
            $desc =$this->input->post('desc');
            //标题
            $title =$this->input->post('title');

            $this->load->library('email');
            //config email
            $emailConfig = [];
            $emailConfig['smtp_host'] = 'ssl://smtp.163.com';
            $emailConfig['smtp_user'] = 'z769347672@163.com';
            //在163个人邮箱中开启smtp，输入smtp密码
            $emailConfig['smtp_pass'] = '1234qwer';
            $emailConfig['smtp_port'] = '465';
            $emailConfig['protocol'] = 'smtp';
            $emailConfig['smtp_timeout'] = 30;
            $emailConfig['charset'] = 'utf-8';
            $emailConfig['wordwrap'] = TRUE;
            //根据自己需求进行切换
            $emailConfig['mailtype'] = 'html';
            $emailConfig['crlf'] = "\r\n";
            $this->email->initialize($emailConfig);
            $this->email->set_newline("\r\n");

            $this->email->from('z769347672@163.com', $name);
            $this->email->to($email);
            //标题
            $this->email->subject($title);
            //内容
            $this->email->message($title);

            if (!$this->email->send())
            {
                $errorcode = $this->email->print_debugger();
                echo $errorcode;
                
            }
            else
            {
                echo "<script>alert('邮件发送成功');function jumurl(){
                    　　window.location.href = 'http://www.xbang.com/index.php/Contact';
                    　　}
                    　　setTimeout(jumurl,500);</script>";
            }

        }else{
            echo "212";
        }
    }

} 