<?php
/* Entrada de dados */
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$tipo = $_POST['tipo'];
/* Processamento */

 

switch ( $tipo ){

  case 1:
    $tipo = 'Visitante';

   break;

  case 2:

    $tipo = 'Consolidacao';

    break;

   case 3:

    $tipo = 'Membro';

    break;

   
}




/* Saida de dados */
//echo "$nome <br />";
//echo "$telefone <br />";
//echo "$tipo <br />";


?>


<script language="JavaScript"> 

 //Alerta
 
window.location="cadastro-ok.php"; 
</script> 