<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

    public function file()
	{  
        $this->load->helper('download');
        $data = file_get_contents(base_url('/public/images/mobile_wiz.jpg'));
        $filename = 'mobile_wiz.jpg';
        force_download($filename, $data);
    }

}

?>