<?php
class Connection
{ 
  public static function obterConexao($senha = "", $usuario = "root", $nomeServidor = "172.17.0.2", $nomeBanco = "eComida")
  { 
    return new mysqli($nomeServidor, $usuario, $senha, $nomeBanco);
  }
}
?>