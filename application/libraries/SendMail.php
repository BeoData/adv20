<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 require FCPATH . 'vendor/autoload.php';

// require FCPATH."vendor/phpmailer/phpmailer/src/PHPMailer.php";
// require FCPATH."vendor/phpmailer/phpmailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;




class SendMail
{
    public $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer; 
        $this->mail->isSMTP(); 
        
        $this->mail->Host = get_admin_setting('smtp_host');
        $this->mail->Port = get_admin_setting('smtp_port'); 
        $this->mail->SMTPSecure = get_admin_setting('smtp_crypto') ? trim(get_admin_setting('smtp_crypto')) : ""; 
        $this->mail->Username = trim(get_admin_setting('smtp_user'));
        $this->mail->Password = trim(get_admin_setting('smtp_pass'));

        $this->mail->SMTPAuth = true; 
        $this->mail->Debugoutput = 'html';
        $this->mail->CharSet = 'UTF-8';
        $this->mail->Mailer = "SMTP";
    }

    public function sendTo($mail_to, $subject, $recipet_name, $message) 
    {
        $this->mail->setFrom(get_admin_setting('site_email'),get_admin_setting('site_name'));
        $this->mail->addAddress($mail_to, $recipet_name);
        $this->mail->isHTML(true); 
        $this->mail->Subject = $subject;
        $this->mail->Body = $message;
        //$this->mail->SMTPDebug  = 3; 
        if (!$this->mail->send()) 
        {

            log_message('error', 'Mailer Error: ' . $this->mail->ErrorInfo);
            //p($this->mail->ErrorInfo);
            return false;
        }
        
        return true;
    }

}
