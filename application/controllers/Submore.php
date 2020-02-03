<?php

defined('BASEPATH') OR exit('No direct script access allowed');

set_include_path(".:/usr/lib/php:/usr/local/lib/php:/home/products/php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class Submore extends CI_Controller {

    public function send_phpmailer() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $name = $this->input->post('subname');
        $email = $this->input->post('subemail');  

        $this->form_validation->set_rules('subname', 'Name', 'required');
        $this->form_validation->set_rules('subemail', 'Email', 'required');

                if ($this->form_validation->run() == TRUE)
                {
                    //echo "It's all Good Form validated!";

                    // Instantiation and passing `true` enables exceptions
                        $mail = new PHPMailer(true);

                        try {
                            //Server settings
                            //$mail->SMTPDebug = 2;                                       // Enable verbose debug output
                            $mail->isSMTP();                                            // Set mailer to use SMTP
                            $mail->Host       = 'mail.productsandservices.eu.com';  // Specify main and backup SMTP servers
                            $mail->SMTPAuth   = TRUE;                                   // Enable SMTP authentication
                            $mail->Username   = 'cosminmus@productsandservices.eu.com';                     // SMTP username
                            $mail->Password   = 'Products123';                               // SMTP password
                            //$mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
                            //$mail->Port       = 465;                                    // TCP port to connect to
                            $mail->SMTPAutoTLS = false;

                            //Recipients
                            $mail->setFrom($email, 'Mailer from');
                            $mail->addAddress('cosminmus@productsandservices.eu.com', 'CM');     // Add a recipient
                            // $mail->addAddress('ellen@example.com');               // Name is optional
                            $mail->addReplyTo($email, 'Information : You have sent an email to me!');
                            // $mail->addCC('cc@example.com');
                            // $mail->addBCC('bcc@example.com');

                            // Attachments
                            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                            // Content
                            $mail->isHTML(true);                                  // Set email format to HTML
                            $mail->Subject = 'Here is the subject';
                            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                            $mail->AltBody = 'This email was sent using CodeIgnier 3 and PHPMailer Service';

                            $mail->send();
                            //echo 'Message has been sent';
                            
                            $this->load->view('subscribe/submore_sucess');
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                            
                            //echo $this->email->print_debugger();
                        }

                    

                }
                else
                {   
                    $this->load->view('submore_view');
                    //$this->output->enable_profiler(TRUE);

                }

                //$this->output->enable_profiler(TRUE);


    }










}



?>