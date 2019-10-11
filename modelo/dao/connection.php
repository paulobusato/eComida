<?php
class Connection
{  
  public static function obterConexao($senha = "", $usuario = "root", $nomeServidor = "localhost", $nomeBanco = "ecomida")
  {
    return new mysqli($nomeServidor, $usuario, $senha, $nomeBanco);
  }
}
?>