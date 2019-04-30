<?php

include_once '../core/CommandeC.php';
include_once '../entities/Commande.php';

if(isset($_POST['Ajouter']))
{
  $soi=new commande($_POST['numc'],$_POST['receveur'],$_POST['transit'],$_POST['modalite'],$_POST['prix']);
  ajouter($soi);
  require_once './testMail.php';
}

header('LOCATION:ajoutc.html');
?>
