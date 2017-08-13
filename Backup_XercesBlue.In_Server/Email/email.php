<?php
if($_POST && isset($_FILES['my_file']))
{

    $sender_email = 'sender_mail@example.com'; //sender email
    $recipient_email = 'recipient_mail@example.com'; //recipient email
    $subject = 'Test mail'; //subject of email
    $message = 'This is body of the message'; //message body
   
    //get file details we need
    $file_tmp_name    = $_FILES['my_file']['tmp_name'];
    $file_name        = $_FILES['my_file']['name'];
    $file_size        = $_FILES['my_file']['size'];
    $file_type        = $_FILES['my_file']['type'];
    $file_error       = $_FILES['my_file']['error'];

    if($file_error>0)
    {
        die('upload error');
    }
    //read from the uploaded file & base64_encode content for the mail
    $handle = fopen($file_tmp_name, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));


    # Mail headers should work with most clients (including thunderbird)
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion()."\r\n";
    $headers .= "From:".$sender_email."\r\n";
    $headers .= "Subject:".$subject."\r\n";
    $headers .= "Reply-To: ".$sender_email."" . "\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=".md5('boundary1')."\r\n\r\n";

    $headers .= "--".md5('boundary1')."\r\n";
    $headers .= "Content-Type: multipart/alternative;  boundary=".md5('boundary2')."\r\n\r\n";
   
    $headers .= "--".md5('boundary2')."\r\n";
    $headers .= "Content-Type: text/plain; charset=ISO-8859-1\r\n\r\n";
    $headers .= $message."\r\n\r\n";

    $headers .= "--".md5('boundary2')."--\r\n";
    $headers .= "--".md5('boundary1')."\r\n";
    $headers .= "Content-Type:  ".$file_type."; ";
    $headers .= "name=\"".$file_name."\"\r\n";
    $headers .= "Content-Transfer-Encoding:base64\r\n";
    $headers .= "Content-Disposition:attachment; ";
    $headers .= "filename=\"".$file_name."\"\r\n";
    $headers .= "X-Attachment-Id:".rand(1000,9000)."\r\n\r\n";
    $headers .= $encoded_content."\r\n";
    $headers .= "--".md5('boundary1')."--";
   
    $sentMail = @mail($sender_email, $subject, $message, $headers);
   
    if($sentMail) //output success or failure messages
    {      
        die('Thank you for your email');
    }else{
        die('Could not send mail! Please check your PHP mail configuration.'); 
    }

}
?>