<?php

include_once '../core/CommandeC.php';
include_once '../entities/Commande.php';

if(isset($_POST['Modifier']))
{
 $id=new commande ($_POST['numc'],$_POST['receveur'],$_POST['transit'],$_POST['modalite'],$_POST['prix']);
 modifier($id);
}

header('LOCATION:modifc.html');
?>
