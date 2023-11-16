<?php
use PHPMailer\PHPMailer\PHPMailer;

class SendMail{
    
    public static function mail($to,$subject,$message){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'demosalesforceasd@gmail.com';
        $mail->Password = '12311230980098';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->isHTML = true;
        $mail->setFrom('systemtest@gmail.com','Công viên Thiên Đường Bảo Sơn');
        $mail->addAddress($to,'Admin');
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->SMTPDebug = 0;
        if($mail->send()){
            return "ok";
        }else{
            return $mail->ErrorInfo;
        }
    }

    
}
?>