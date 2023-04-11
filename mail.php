<?php 
        $field_name = $_POST['name'];
        $field_email = $_POST['email'];
        $field_phone = $_POST['phone'];
        $field_orderid = $_POST['orderid'];
        $field_book = $_POST['book'];
        $field_upino = $_POST['upino'];
    
    $mail_to = 'vaibhavvglibrary@gmail.com';
    $subject = 'Message from book buyer'.$field_name;

    $body_message = 'From:-'.$field_name."\n";
    $body_message = 'Email:-'.$field_email."\n";
    $body_message = 'Phone:-'.$field_phone."\n";
    $body_message = 'Order id:-'.$field_orderid."\n";
    $body_message = 'Book:-'.$field_book."\n";
    $body_message = 'Upi Id:-'.$field_upino;

    $headers = 'From: '.$field_email."\r\n";
    $headers = 'Reply-To:'.$field_email."\r\n";

    $email_status = mail($mail_to, $subject, $body_message, $headers);

    if($email_status){
        ?>
        <script language="javascript" type="text/javascript">
            alert('Thank you for the order. We will contact you shortly');
            window.location = 'index.html';
            </script>
            <?php
    }
    else { ?>
    <script language="javascript" type="text/javascript">
        alert('Messege failed');
        window.location ='index.html';
        </script>
       <?php
    }
    ?>
