<?php
$to       = 'badisraissi98@gmail.com';
$subject  = 'Confirmation Commande';
$msg="Votre Commande a été ajouté avec succés ";
$headers  = 'From: Obladi.coffee@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $msg, $headers))
    echo "Email sent";
else
    echo "Email sending failed";
//mail("mohamed.khammeri@esprit.tn","New Product in the house!!",$msg);
?>
