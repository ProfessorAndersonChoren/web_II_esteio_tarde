<?php
if (empty($_POST))
    throw new InvalidArgumentException("Não existe uma requisição!!!");

$email = $_POST['user_email'];
$password = $_POST['user_password'];
$db = [
    [
        'name' => 'João Paulo',
        'email' => 'joao.paulo@email.com.br',
        'password' => '$2y$10$QJy0POKCM1cIqSBP9qUaEe.VH2S8O8D3FhqnANFjhs5OVaPlwoqpm',
        'gender' => 'M'
    ],
    [
        'name' => 'Maria Aparecida',
        'email' => 'maria.aparecida@email.com.br',
        'password' => '$2y$10$PBlyNIeG.NSDVma/9rVB6uON5jkXohgpt8pB5/g.yo3qzvxAoAhVW',
        'gender' => 'F'
    ]
];

session_start();
foreach ($db as $register) {
    if (
        $register['email'] == $email &&
        passwordVerify($password, $register['password'])
    ) {
        $_SESSION['user_name'] = $register['name'];
        $_SESSION['user_gender'] = $register['gender'];
        header('location:dashboard.php');
        exit;
    }
}
$_SESSION['msg_login_error'] = 'Lamento, seu usuário não foi localizado!!!';
header('location:index.php');

function passwordVerify(string $password, string $hash): bool
{
    return password_verify($password, $hash);
}
