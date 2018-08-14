<?php
namespace Notification;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Email{
    private $mail = \stdClass::class;

    public  function  __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $this->mail->isSMTP();                                      // Set mailer to use SMTP
        $this->mail->Host = 'server3.rapidcloud.com.br';  // Specify main and backup SMTP servers
        $this->mail->SMTPAuth = true;                               // Enable SMTP authentication
        $this->mail->Username = 'contato@agenciaplus.com.br';                 // SMTP username
        $this->mail->Password = '@Jsm01020304';                           // SMTP password
        $this->mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $this->mail->Port = 587;
        $this->mail->CharSet='utf-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);
        $this->mail->setFrom('jocmartins@gmail.com', 'Jocean Martins');
    }

    public function sendMail($subject, $body, $replayEmail, $replayName, $addressEmail, $addressName){
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;
        $this->mail->addReplyTo($replayEmail,$replayName);
        $this->mail->addAddress($addressEmail,$addressName);
        try{
        $this->mail->send();
        } catch(Exception $e){
            echo "Erro ao enviar o e-mail: {$this->mail->ErrorInfo} {$e->getMessage()}";

        }


  }
}