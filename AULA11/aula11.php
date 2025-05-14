<?php 

include_once 'conta.class.php'; 

$conta1 = new Conta();

$conta1->Nome = "fulano da silva";
$conta1->Cpf = "123.456.789-00";

$conta1->ConsultarSaldo();
echo "<hr>";

echo $conta1->Depositar(1500);
echo "<hr>";

$conta1->ConsultarSaldo();
echo "<hr>";

echo $conta1->Sacar(700);
echo "<hr>";

$conta1->ConsultarSaldo();
echo "<hr>";
?>