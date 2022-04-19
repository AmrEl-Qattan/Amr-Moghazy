<?php
namespace App\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

abstract class Mail {
    protected PHPMailer $mail;
    protected $mailTo;
    protected $body;
    protected $subject;
    public function __construct(string $mailTo ,string $subject ,string $body)
    {
        $this->mailTo = $mailTo;
        $this->subject = $subject;
        $this->body = $body;
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = SMTP::DEBUG_OFF;                     
        $this->mail->isSMTP();                                            
        $this->mail->Host       = 'smtp.gmail.com';                     
        $this->mail->SMTPAuth   = true;                                   
        $this->mail->Username   = 'ntiapril2022@gmail.com';                    
        $this->mail->Password   = 'nti123456';                               
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
        $this->mail->Port       = 465;                                    
    }
    public abstract function send():bool;
}
