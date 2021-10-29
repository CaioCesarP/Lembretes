<?php
$message = wordwrap($_POST['lemb'], 70, "\r\n");

$to =$_POST['dest'];

$subject = 'Lembrete';

$headers = array(
    'From' => 'caiocesarworks@gmail.com',
    'Reply-To' => 'No-Reply@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion()
);
//print_r($_POST['lemb']);

if(isset($_POST['lemb']) && !empty($_POST['lemb']) && isset($_POST['dest']) && !empty($_POST['dest'])){
    $enviar = mail($to, $subject, $message, $headers);
    echo "Mensagem enviada com sucesso. <br>";
    echo $to . "<br>";
    echo $message . "<br>";
    return  $enviar;
} else{
    echo "Erro de envio: Sintaxe Incorreta.";
}
return
?>
