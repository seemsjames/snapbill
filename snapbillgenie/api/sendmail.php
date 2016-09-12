<?php
        $body = file_get_contents('billing.html');

        require 'class.phpmailer.php';
        $mailer = new PHPMailer();
        $mailer->IsSMTP();
        $mailer->Host = "ssl://smtp.gmail.com";
        $mailer->SMTPAuth = "true";
        $mailer->Port = "465";
        $mailer->Username = "ChrisGilesItWorks@gmail.com";
        $mailer->Password = "JayeshTankariya@3210";

        $mailer->From = "Kanhasoft.com";
        $mailer->FromName = "Storagenie Snapbill";
        $mailer->Subject = "Payment link";

        $mailer->Body = $body;
        //$mailer->WordWrap = 50;
        //$mailer->AddAddress('his.awesomenes@gmail.com');
        // $mailer->AddAddress('his.awesomenes@gmail.com');
        // $mailer->AddCC('manoj.skpatel2010@gmail.com');
        //$mailer->AddEmbeddedImage($//, 'logo_2u');
        $mailer->IsHTML(true);
        if ($mailer->Send()) { //output success or failure messages
            $result['status'] = 200;
            $result['msg'] = 'Thank you for your email';
        } else {
            $result['status'] = 400;
            $result['msg'] = 'Could not send mail!';
        }
?>