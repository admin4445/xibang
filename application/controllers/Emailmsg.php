<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Emailmsg extends MY_Controller {
	public function email()
	{

        $this->load->view('email');

    }

} 