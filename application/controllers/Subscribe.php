<?php

defined('BASEPATH') OR exit('No direct script access allowed');

set_include_path(".:/usr/lib/php:/usr/local/lib/php:/home/products/php");

class Subscribe extends CI_Controller {

    public function send_mail() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $name = $this->input->post('name');
        $email = $this->input->post('email');  

        $this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == TRUE)
        {
            //echo "It's all Good Form validated!";

            $config = Array();
            $config['protocol'] = 'SMTP';
            $config['smtp_crypto'] = 'ssl';
            //$config['smtp_host'] = gethostbyname('smtp.gmail.com');

            $config['smtp_host'] = 'mail.productsandservices.eu.com';    
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'cosminmus@productsandservices.eu.com'; // email id
            $config['smtp_pass'] = 'Products123'; // email password
            $config['mailtype'] = 'html';
            $config['wordwrap'] = TRUE;
            $config['charset'] = 'utf-8';
            $config['newline'] = "\r\n"; //use double quotes here
            $config['crlf'] = "\r\n";

            $this->load->library('email');
            $this->email->initialize($config);

            
            $to_email = 'cosminmus@productsandservices.eu.com';
            $htmlContent = '<h1>Sending email via SMTP server from </h1>'.$email." ";
            $htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

            $this->email->from($this->input->post('email'));
            $this->email->to($to_email);
            $this->email->subject('Email Test');
            $this->email->message($htmlContent);

            //$this->email->send();           

                    if ($this->email->send()) {
                        
                        //echo 'Email Successfully Send !';
                        $this->load->view('subscribe/subscribe_sucess');
                        
                    } else {

                        echo $this->email->print_debugger();

                        echo '<p class="error_msg">Invalid Gmail Account or Password !</p>';
                        $this->output->enable_profiler(TRUE);
                    }

        }
        else
        {   
             $this->load->view('subscribe_view');
            
        }

                //$this->output->enable_profiler(TRUE);


    }

}


?>




