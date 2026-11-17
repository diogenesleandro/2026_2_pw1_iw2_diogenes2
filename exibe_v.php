<?php

function exibe(){
   include("conecta.php");
   $texto="";
   $sql = "SELECT * FROM tb_contato";
   $stmt = $pdo->query($sql);


   $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

   foreach ($usuarios as $usuario) {
      $texto.= "".$usuario['nm_nome']." - ".$usuario['ds_email']. "<br>";
   };
   echo $texto;
}
?>