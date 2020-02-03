<?php
defined('BASEPATH') OR exit('No direct script access allowed');

set_include_path(".:/usr/lib/php:/usr/local/lib/php:/home/products/php");

require_once APPPATH.'../vendor/autoload.php';

class Contact extends CI_Controller {

    public function swift_mail() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $name = $this->input->post('username');
        $email = $this->input->post('useremail');  
        $web = $this->input->post('userweb');
        $usermess = $this->input->post('usermessage'); 

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('useremail', 'Useremail', 'required');
        $this->form_validation->set_rules('userweb', 'Userwebsite', 'required');
        $this->form_validation->set_rules('usermessage', 'Usermessage', 'required');

        if ($this->form_validation->run() == TRUE)
        {
                //echo "It's all Good Form validated!";

                //Create the Transport. I created it using the gmail configuration
                $transport = Swift_SmtpTransport::newInstance('mail.productsandservices.eu.com', 465,'ssl')
                    ->setUsername('cosminmus@productsandservices.eu.com')
                    ->setPassword('Products123');
            
                // You could alternatively use a different transport such as Sendmail or Mail:
                //Sendmail:
                //$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');
                //Mail
                //$transport = Swift_MailTransport::newInstance();
            
                //Create the message
                $message = Swift_Message::newInstance();
            
                //Give the message a subject
                $message->setSubject('Message From ->'.$name)
                    ->setFrom($email)
                    ->setTo('cosminmus@productsandservices.eu.com')
                    ->setBody('Website is : '.$web.' '.'that has the message :'.$usermess)
                    ->addPart('<q>Here is the message sent with swiftmailer</q>', 'text/html');
            
                //Create the Mailer using your created Transport
                $mailer = Swift_Mailer::newInstance($transport);
            
                //Send the message
                $result = $mailer->send($message);
            
                if ($result) {
                    //echo "Email sent successfully";
                    $this->load->view('subscribe/contact_sucess');
                }
                else {
                    echo "Email failed to send";
                    echo $this->email->print_debugger();
                    //$this->output->enable_profiler(TRUE);
                }
        }
        else {   
            $this->load->view('contact_view');
                    
        }
                
          //$this->output->enable_profiler(TRUE);
    }

}

?>