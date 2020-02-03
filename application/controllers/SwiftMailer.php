<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
 
// we will use the composer autoloader to make sure we autoload the packages installed by composer
require_once APPPATH.'../vendor/autoload.php';
 
// if you want you can load only the swiftmailer, considering that you will only need it in this controller
// require_once APPPATH.'../vendor/swiftmailer/swiftmailer/lib/swift_required.php';
 
class Swiftmailer extends MY_Controller {
  public function index()
  {
    //Create the Transport. I created it using the gmail configuration
    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')
      ->setUsername('***@gmail.com')
      ->setPassword('******');
 
    // You could alternatively use a different transport such as Sendmail or Mail:
    //Sendmail:
    //$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');
    //Mail
    //$transport = Swift_MailTransport::newInstance();
 
    //Create the message
    $message = Swift_Message::newInstance();
 
    //Give the message a subject
    $message->setSubject('Your subject')
      ->setFrom('youremail@gmail.com')
      ->setTo('receiver@example.com')
      ->setBody('Here is the message sent with swiftmailer')
      ->addPart('<q>Here is the message sent with swiftmailer</q>', 'text/html');
 
    //Create the Mailer using your created Transport
    $mailer = Swift_Mailer::newInstance($transport);
 
    //Send the message
    $result = $mailer->send($message);
 
    if ($result) {
      echo "Email sent successfully";
    }
    else
    {
      echo "Email failed to send";
    }
  }
}

?>