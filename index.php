<?php
require __DIR__.'/lib_ext/autoload.php';

use Notification\Email;


$novoEmail= new Email;
$novoEmail->sendMail("Assunto de Teste","<p>Estou Testando envio de email</p>", "Jocmartins@gmail.com","Jocean Martins","contato@agenciaplus.com.br","Agencia Plus");
var_dump($novoEmail);
