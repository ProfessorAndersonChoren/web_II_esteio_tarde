<?php
require 'Client.php';

$client = new Client('47.846.555-5');

// Modificar os dados
$client->fullname = 'Elisa Lívia Sueli Dias';
$client->phone = "(51) 99370-9317";
$client->status = true;

// Não deixar isso acontecer
$client->cpf = "Não tem CPF!!!";

// Mostrar os dados do cliente
echo $client;